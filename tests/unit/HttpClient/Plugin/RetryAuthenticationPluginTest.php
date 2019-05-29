<?php

namespace Starweb\Tests\HttpClient\Plugin;

use GuzzleHttp\Psr7\Request;
use Http\Client\Promise\HttpFulfilledPromise;
use Http\Client\Promise\HttpRejectedPromise;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Promise\Promise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Exception\MaximumAuthenticationAttemptsReachedException;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;

class RetryAuthenticationPluginTest extends TestCase
{
    public function testConstructor()
    {
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($manager);

        $this->assertInstanceOf(RetryAuthenticationPlugin::class, $plugin);
    }

    public function testHandleRequestWithValidTokenResponse()
    {
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($manager);

        $messageFactory = MessageFactoryDiscovery::find();
        $response = $messageFactory->createResponse(200);

        $response = $plugin->handleRequest(
            $this->createMock(Request::class),
            function(RequestInterface $request) use ($response)
            {
                return new HttpFulfilledPromise($response);
            },
            function(RequestInterface $request) use ($response)
            {
                return new HttpFulfilledPromise($response);
            }
        );

        $this->assertInstanceOf(Promise::class, $response);
    }

    public function testHandleRequestWithInvalidTokenResponse()
    {
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($manager);

        $messageFactory = MessageFactoryDiscovery::find();
        $response = $messageFactory->createResponse(
            401,
            null,
            ['Content-Type' => 'application/json'],
            '{"error": "invalid_token"}'
        );

        $response = $plugin->handleRequest(
            $this->createMock(Request::class),
            function(RequestInterface $request) use ($response)
            {
                return new HttpFulfilledPromise($response);
            },
            function(RequestInterface $request) use ($response)
            {
                return new $response;
            }
        );

        $this->assertInstanceOf(HttpFulfilledPromise::class, $response);
    }

    public function testHandleRequestWithInvalidTokenResponseHittingRetryMaximum()
    {
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($manager);

        $messageFactory = MessageFactoryDiscovery::find();
        $response = $messageFactory->createResponse(
            401,
            null,
            ['Content-Type' => 'application/json'],
            '{"error": "invalid_token"}'
        );

        for ($i = 0; $i <= RetryAuthenticationPlugin::MAXIMUM_ATTEMPTS; $i++) {
            if ($i < RetryAuthenticationPlugin::MAXIMUM_ATTEMPTS) {
                $promise = new HttpFulfilledPromise($response);
            } else {
                $requestMock = $this->createMock(RequestInterface::class);
                $exception = new MaximumAuthenticationAttemptsReachedException(
                    'max retries hit',
                    $requestMock,
                    $response
                );
                $promise = new HttpRejectedPromise($exception);
            }

            $resolvedResponse = $plugin->handleRequest(
                $this->createMock(Request::class),
                function(RequestInterface $request) use ($response, $promise)
                {
                    return $promise;
                },
                function(RequestInterface $request) use ($response)
                {
                    return $response;
                }
            );

        }

        $this->assertInstanceOf(HttpRejectedPromise::class, $resolvedResponse);
    }
}

<?php declare(strict_types=1);

namespace Starweb\Tests\HttpClient\Plugin;

use GuzzleHttp\Psr7\Request;
use Http\Client\Promise\HttpFulfilledPromise;
use Http\Client\Promise\HttpRejectedPromise;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Promise\Promise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;

class RetryAuthenticationPluginTest extends TestCase
{
    public function testConstructor(): void
    {
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($manager);

        $this->assertInstanceOf(RetryAuthenticationPlugin::class, $plugin);
    }

    public function testHandleRequestWithValidTokenResponse(): void
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

    public function testHandleRequestWithInvalidTokenResponse(): void
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
                return new HttpFulfilledPromise($response);
            }
        );

        $this->assertInstanceOf(HttpFulfilledPromise::class, $response);
    }

    public function testHandleRequestWithInvalidTokenResponseHittingRetryMaximum(): void
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
            $resolvedResponse = $plugin->handleRequest(
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
        }
        $this->assertInstanceOf(HttpRejectedPromise::class, $resolvedResponse);
    }
}

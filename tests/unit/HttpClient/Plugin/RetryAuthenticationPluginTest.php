<?php

namespace Starweb\Tests\HttpClient\Plugin;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Request;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;

class RetryAuthenticationPluginTest extends TestCase
{
    public function testConstructor()
    {
        $client = new Client();
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($client, $manager);

        $this->assertInstanceOf(RetryAuthenticationPlugin::class, $plugin);
    }

    public function testHandleRequest()
    {
        $client = new Client();
        $response = $this->createMock(ResponseInterface::class);
        $client->addResponse($response);
        $response->method('getBody')->willReturn('{"access_token": "my-token", "expires_in": 3600}');

        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($client, $manager);

        $promise = $this->createMock(Promise::class);
        $request = $this->createMock(Request::class);
        $request->method('then')->willReturn($promise);
        $promise->method('then')->willReturn($response);

        $handledRequest = $plugin->handleRequest($request, function (RequestInterface $request) {
            return $request;
        }, function (RequestInterface $request) {
            return $request;
        });

        $this->assertInstanceOf(RequestInterface::class, $handledRequest);
    }
}

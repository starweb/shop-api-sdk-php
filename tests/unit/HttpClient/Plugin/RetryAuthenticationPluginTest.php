<?php

namespace Starweb\Tests\HttpClient\Plugin;

use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\HttpClient\Plugin\RetryAuthenticationPlugin;

class RetryAuthenticationPluginTest extends TestCase
{
    public function testConstructor()
    {
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($manager);

        $this->assertInstanceOf(RetryAuthenticationPlugin::class, $plugin);
    }

    public function testHandleRequest()
    {
        $manager = $this->createMock(TokenManager::class);
        $plugin = new RetryAuthenticationPlugin($manager);

        $promise = $this->createMock(Promise::class);
        $request = $this->createMock(Request::class);
        $request->method('then')->willReturn($promise);

        $handledRequest = $plugin->handleRequest($request, function (RequestInterface $request) {
            return $request;
        }, function (RequestInterface $request) {
            return $request;
        });

        $this->assertInstanceOf(RequestInterface::class, $handledRequest);
    }
}

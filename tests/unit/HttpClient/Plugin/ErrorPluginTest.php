<?php declare(strict_types=1);

namespace Starweb\Tests\HttpClient\Plugin;

use GuzzleHttp\Psr7\Request;
use Http\Client\Promise\HttpFulfilledPromise;
use Http\Client\Promise\HttpRejectedPromise;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Promise\Promise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Starweb\HttpClient\Plugin\ErrorPlugin;

class ErrorPluginTest extends TestCase
{
    public function testConstructor()
    {
        $plugin = new ErrorPlugin();

        $this->assertInstanceOf(ErrorPlugin::class, $plugin);
    }

    public function testHandleRequestWithSuccessfulResponse()
    {
        $plugin = new ErrorPlugin();

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

    public function testHandleRequestWithClientErrorResponse()
    {
        $plugin = new ErrorPlugin();

        $messageFactory = MessageFactoryDiscovery::find();
        $request = $messageFactory->createRequest('GET', '/shop');
        $response = $messageFactory->createResponse(
            404,
            null,
            ['Content-Type' => 'application/json'],
            '{"error_description": "Not Found"}'
        );

        $response = $plugin->handleRequest(
            $request,
            function(RequestInterface $request) use ($response)
            {
                return new HttpFulfilledPromise($response);
            },
            function(RequestInterface $request) use ($response)
            {
                return new HttpFulfilledPromise($response);
            }
        );

        $this->assertInstanceOf(HttpRejectedPromise::class, $response);
    }

    public function testHandleRequestWithServerErrorResponse()
    {
        $plugin = new ErrorPlugin();

        $messageFactory = MessageFactoryDiscovery::find();
        $request = $messageFactory->createRequest('GET', '/shop');
        $response = $messageFactory->createResponse(
            500,
            null,
            ['Content-Type' => 'application/json'],
            '{"error_description": "Internal Server Error"}'
        );

        $response = $plugin->handleRequest(
            $request,
            function(RequestInterface $request) use ($response)
            {
                return new HttpFulfilledPromise($response);
            },
            function(RequestInterface $request) use ($response)
            {
                return new HttpFulfilledPromise($response);
            }
        );

        $this->assertInstanceOf(HttpRejectedPromise::class, $response);
    }
}

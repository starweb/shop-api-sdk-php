<?php

namespace Starweb\Tests\HttpClient\Message;

use GuzzleHttp\Psr7\Response;
use Http\Discovery\StreamFactoryDiscovery;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Starweb\Api\Model\Shop\Shop;
use Starweb\HttpClient\Message\EnhancedResponse;

class EnhancedResponseTest extends TestCase
{
    public function testConstructor()
    {
        $this->assertInstanceOf(EnhancedResponse::class, $this->getDefaultResponse());
    }

    public function testGetProtocolVersion()
    {
        $version = $this->getDefaultResponse()->getProtocolVersion();

        $this->assertInternalType('string', $version);
        $this->assertEquals('1.1', $version);
    }

    public function testWithProtocolVersion()
    {
        $response = $this->getDefaultResponse();
        $response = $response->withProtocolVersion('2');
        $version = $response->getProtocolVersion();

        $this->assertInternalType('string', $version);
        $this->assertEquals('2', $version);
    }

    public function testGetHeaders()
    {
        $response = $this->getDefaultResponse(new Response(200, ['X-Custom-Header' => 'Foo']));
        $headers = $response->getHeaders();

        $this->assertInternalType('array', $headers);
        $this->assertInternalType('array', current($headers));
        $this->assertCount(1, $headers);
        $this->assertEquals('Foo', current(current($headers)));
    }

    public function testHasHeader()
    {
        $response = $this->getDefaultResponse(new Response(200, ['X-Custom-Header' => 'Foo']));

        $this->assertInternalType('boolean', $response->hasHeader('X-Custom-Header'));
        $this->assertTrue($response->hasHeader('X-Custom-Header'));
        $this->assertFalse($response->hasHeader('Content-Type'));
    }

    public function testGetHeader()
    {
        $response = $this->getDefaultResponse(new Response(200, ['X-Custom-Header' => 'Foo']));
        $header = $response->getHeader('X-Custom-Header');

        $this->assertInternalType('array', $header);
        $this->assertCount(1, $header);
        $this->assertEquals('Foo', current($header));
    }
    
    public function testGetHeaderline()
    {
        $response = $this->getDefaultResponse(new Response(200, ['X-Custom-Header' => 'Foo']));
        $headerLine = $response->getHeaderLine('X-Custom-Header');

        $this->assertInternalType('string', $headerLine);
        $this->assertEquals('Foo', $headerLine);
    }

    public function testWithHeader()
    {
        $response = $this->getDefaultResponse(new Response(200, ['X-Custom-Header' => 'Foo']));
        $response = $response->withHeader('X-Custom-Header', 'Bar');

        $this->assertTrue($response->hasHeader('X-Custom-Header'));
        $this->assertEquals('Bar', $response->getHeaderLine('X-Custom-Header'));
    }

    public function testWithAddedHeader()
    {
        $response = $this->getDefaultResponse(new Response(200, ['X-Custom-Header' => 'Foo']));
        $response = $response->withAddedHeader('X-Custom-Header', 'Bar');

        $this->assertTrue($response->hasHeader('X-Custom-Header'));
        $this->assertCount(1, $response->getHeaders());
        $this->assertEquals('Foo, Bar', $response->getHeaderLine('X-Custom-Header'));
    }

    public function testWithoutHeader()
    {
        $response = $this->getDefaultResponse(new Response(200, ['X-Custom-Header' => 'Foo']));
        $response = $response->withoutHeader('X-Custom-Header');

        $this->assertFalse($response->hasHeader('X-Custom-Header'));
    }

    public function testGetBody()
    {
        $response = $this->getDefaultResponse(new Response(200, [], 'Foo'));
        $body = $response->getBody();

        $this->assertInstanceOf(StreamInterface::class, $body);
        $this->assertEquals('Foo', $body->__toString());
    }

    public function testWithBody()
    {
        $streamFactory = StreamFactoryDiscovery::find();
        $response = $this->getDefaultResponse();
        $response = $response->withBody($streamFactory->createStream('Foo'));
        $body = $response->getBody();

        $this->assertInstanceOf(StreamInterface::class, $body);
        $this->assertEquals('Foo', $body->__toString());
    }

    public function testGetStatusCode()
    {
        $response = $this->getDefaultResponse();
        $code = $response->getStatusCode();

        $this->assertInternalType('int', $code);
        $this->assertEquals(200, $code);
    }

    public function testWithStatusCode()
    {
        $response = $this->getDefaultResponse();
        $response = $response->withStatus(400, 'Bad Request');
        $code = $response->getStatusCode();

        $this->assertInternalType('int', $code);
        $this->assertEquals(400, $code);
    }

    public function testGetReasonPhrase()
    {
        $response = $this->getDefaultResponse(new Response(200, [], null, '1.1', 'OK'));
        $reason = $response->getReasonPhrase();

        $this->assertInternalType('string', $reason);
        $this->assertEquals('OK', $reason);
    }

    public function testGetStringContent()
    {
        $response = $this->getDefaultResponse(new Response(200, [], 'Foo'));
        $content = $response->getContent();

        $this->assertInternalType('string', $content);
        $this->assertEquals('Foo', $content);
    }

    public function testGetJsonContent()
    {
        $response = $this->getDefaultResponse(new Response(200, ['Content-Type' => 'application/json'], '{"foo": "bar"}'));
        $content = $response->getContent();

        $this->assertInternalType('array', $content);
        $this->assertTrue(array_key_exists('foo', $content));
        $this->assertEquals('bar', $content['foo']);
    }

    public function testGetContentAsModel()
    {
        $response = $this->getDefaultResponse(new Response(200, ['Content-Type' => 'application/json'], '{"name": "my shop"}'));
        $model = $response->getContentAsModel(Shop::class);

        $this->assertInstanceOf(Shop::class, $model);
        $this->assertEquals('my shop', $model->getName());
    }

    /**
     * @expectedException \Starweb\Exception\InvalidResponseContentException
     */
    public function testGetContentAsModelWithInvalidResponse()
    {
        $response = $this->getDefaultResponse(new Response(200, ['Content-Type' => 'application/json'], '{"name": "my shop"'));
        $model = $response->getContentAsModel(Shop::class);
    }

    private function getDefaultResponse(ResponseInterface $response = null)
    {
        if (!$response) {
            $response = new Response();
        }

        return new EnhancedResponse($response);
    }
}

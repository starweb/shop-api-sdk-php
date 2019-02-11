<?php

namespace Starweb\Tests\HttpClient;

use Http\Discovery\MessageFactoryDiscovery;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Model\MediaFile\MediaFileUpload;
use Starweb\HttpClient\DecoratedHttpClient;
use Starweb\HttpClient\Message\EnhancedResponse;

class EnhancedHttpClientTest extends TestCase
{
    public function testConstructor()
    {
        $client = $this->getDefaultClient();

        $this->assertInstanceOf(DecoratedHttpClient::class, $client);
    }

    public function testGet()
    {
        $client = $this->getDefaultClient();

        $this->assertInstanceOf(EnhancedResponse::class, $client->get('/path', ['foo' => 'bar']));
    }

    public function testHead()
    {
        $client = $this->getDefaultClient();
        $response = $client->head('/path', ['foo' => 'bar', 'ref' => null], ['X-Custom-Header' => 'Foo meets bar']);

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }

    public function testPost()
    {
        $client = $this->getDefaultClient();
        $response = $client->post('/path', ['foo' => 'bar'], ['X-Custom-Header' => 'Foo meets bar']);

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }

    public function testPostWwwFormUrlencoded()
    {
        $client = $this->getDefaultClient();
        $response = $client->postWwwFormUrlencoded('/path', ['foo' => 'bar'], ['X-Custom-Header' => 'Foo meets bar']);

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }

    public function testUploadFile()
    {
        $client = $this->getDefaultClient();
        $uploadFile = $this->createMock(MediaFileUpload::class);
        $response = $client->uploadFile('POST', '/path', $uploadFile);

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }

    public function testPatch()
    {
        $client = $this->getDefaultClient();
        $response = $client->patch('/path', ['foo' => 'bar'], ['X-Custom-Header' => 'Foo meets bar']);

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }

    public function testPut()
    {
        $client = $this->getDefaultClient();
        $response = $client->put('/path', ['foo' => 'bar'], ['X-Custom-Header' => 'Foo meets bar']);

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }

    public function testDelete()
    {
        $client = $this->getDefaultClient();
        $response = $client->delete('/path', ['foo' => 'bar'], ['X-Custom-Header' => 'Foo meets bar']);

        $this->assertInstanceOf(EnhancedResponse::class, $response);
    }

    private function getDefaultClient()
    {
        $client = new Client();
        $requestFactory = MessageFactoryDiscovery::find();

        return new DecoratedHttpClient($client, $requestFactory);
    }
}

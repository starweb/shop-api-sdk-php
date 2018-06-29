<?php

namespace Starweb\Tests\HttpClient;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\HttpClient\Client;
use Http\Mock\Client as ClientMock;

class ClientTest extends TestCase
{
    public function testConstructor()
    {
        $client = $this->getDefaultClient();

        $this->assertInstanceOf(Client::class, $client);
    }

    public function testGet()
    {
        $client = $this->getDefaultClient();

        $this->assertTrue(is_string($client->get('/shop', ['param' => 'value'])));
    }

    public function testHead()
    {
        $client = $this->getDefaultClient();

        $this->assertInstanceOf(Response::class, $client->head('/shop', ['ref' => null]));
    }

    public function testPost()
    {
        $client = $this->getDefaultClient();

        $this->assertTrue(is_string($client->post('/shop', ['param' => 'value'])));
    }

    public function testPostRaw()
    {
        $client = $this->getDefaultClient();

        $this->assertTrue(is_string($client->postRaw('/shop', '{"param": "value"}')));
    }

    public function testPatch()
    {
        $client = $this->getDefaultClient();

        $this->assertTrue(is_string($client->patch('/shop', ['param' => 'value'])));
    }

    public function testPut()
    {
        $client = $this->getDefaultClient();

        $this->assertTrue(is_string($client->put('/shop', ['param' => 'value'])));
    }

    public function testDelete()
    {
        $client = $this->getDefaultClient();

        $this->assertTrue(is_string($client->delete('/shop', ['param' => 'value'])));
    }

    public function testGetJsonContent()
    {
        $client = $this->getDefaultClient();
        $response = $client->get('/shop', ['param' => 'value'], [], \stdClass::class);

        $this->assertTrue(is_string($response));
    }

    public function testGetDeserializedObject()
    {
        $client = $this->getDefaultClient();
        $response = $client->get('/shop', ['param' => 'value'], [], \stdClass::class);

        $this->assertInstanceOf(\stdClass::class, $response);
    }

    private function getDefaultClient(): Client
    {
        $clientMock = new ClientMock();
        $response = $this->createMock(Response::class);
        $response->method('getBody')->willReturn('{"access_token": "my-token", "expires_in": 3600}');
        $response->method('getHeaderLine')->willReturn('application/json');
        $clientMock->addResponse($response);

        $client = new Client(
            $clientMock,
            new ClientCredentials('client_id', 'client_secret'),
            $this->createMock(TokenFilesystemCache::class),
            'https://demo.starweb.se/api/v2',
            []
        );

        return $client;
    }
}

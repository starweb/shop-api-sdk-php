<?php

namespace Starweb\Tests;

use GuzzleHttp\Psr7\Response;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Starweb;

class StarwebTest extends TestCase
{

    public function testConstructorWithClientAndTokenCache()
    {
        $starweb = $this->getStarweb();

        $this->assertInstanceOf(Starweb::class, $starweb);
    }

    /**
     * this is a real life test on the demo api with wrong credentials
     *
     * @expectedException \Starweb\Exception\InvalidCredentialsException
     */
    public function testConstructorWithInvalidCredentials()
    {
        $starweb = new Starweb(
            new ClientCredentials('id', 'secret'),
            'https://demo.starweb.se/api/v2'
        );
    }

    private function getStarweb(): Starweb
    {
        $client = new Client();
        $response = $this->createMock(Response::class);
        $client->addResponse($response);
        $response->method('getBody')->willReturn('{"access_token": "my-token", "expires_in": 3600}');

        $cache = $this->createMock(TokenFilesystemCache::class);
        $cache->method('hasToken')->willReturn(true);
        $cache->method('isExpired')->willReturn(false);
        $cache->method('getToken')->willReturn(new AccessToken('my-token'));

        return new Starweb(
            new ClientCredentials('id', 'secret'),
            'https://demo.starweb.se/api/v2',
            [new ErrorPlugin()],
            $client,
            $cache
        );
    }

    public function testHandleRequest()
    {
        $starweb = $this->getStarweb();
        $shopResource = $starweb->resource('Shop');

        $this->assertInstanceOf(ResourceInterface::class, $shopResource);
        $this->assertInstanceOf(Resource::class, $shopResource);
    }
}

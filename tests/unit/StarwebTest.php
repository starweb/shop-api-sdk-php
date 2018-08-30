<?php

namespace Starweb\Tests;

use GuzzleHttp\Psr7\Response;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\StreamFactory;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;
use Starweb\Api\Authentication\AccessToken;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\ShopResource;
use Starweb\Starweb;

class StarwebTest extends TestCase
{
    /**
     * @var StreamFactory
     */
    private $streamFactory;

    public function testConstructorWithClientAndTokenCache()
    {
        $starweb = $this->getStarweb();

        $this->assertInstanceOf(Starweb::class, $starweb);
    }

    /**
     * @expectedException \Starweb\Exception\InvalidCredentialsException
     */
    public function testConstructorWithoutClientAndTokenCache()
    {
        $starweb = new Starweb(new ClientCredentials('id', 'secret'), 'https://demo.starweb.se/api/v2');

        $this->assertInstanceOf(Starweb::class, $starweb);
    }

    /**
     * this is a real life test on the demo api with wrong credentials
     *
     * @expectedException \Starweb\Exception\InvalidCredentialsException
     */
    public function testConstructorWithInvalidCredentials()
    {
        $client = new Client();
        $response = $this->createMock(Response::class);

        $response->method('getBody')->willReturn(
            $this->getStreamFactory()->createStream(
                '{"error": "invalid_client", "error_description": "Invalid credentials"}'
            )
        );
        $client->addResponse($response);
        $response->method('getStatusCode')->willReturn(400);

        $starweb = new Starweb(
            new ClientCredentials('id', 'secret'),
            'https://demo.starweb.se/api/v2',
            $client
        );
    }

    private function getStarweb(): Starweb
    {
        $client = new Client();
        $response = $this->createMock(Response::class);
        $response->method('getBody')->willReturn(
            $this->getStreamFactory()->createStream('{"access_token": "my-token", "expires_in": "3600"}')
        );
        $client->addResponse($response);

        $messageFactory = MessageFactoryDiscovery::find();

        $cache = $this->createMock(TokenFilesystemCache::class);
        $cache->method('hasToken')->willReturn(true);
        $cache->method('isExpired')->willReturn(false);
        $cache->method('getToken')->willReturn(new AccessToken('my-token'));

        return new Starweb(
            new ClientCredentials('id', 'secret'),
            'https://demo.starweb.se/api/v2',
            $client,
            $messageFactory,
            $cache
        );
    }

    public function testShopResource()
    {
        $starweb = $this->getStarweb();
        $resource = $starweb->resource('Shop');

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(ShopResource::class, $resource);
    }

    public function testMediaFileResource()
    {
        $starweb = $this->getStarweb();
        $resource = $starweb->resource('MediaFile');

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(MediaFileResource::class, $resource);
    }

    public function testProductCategoryResource()
    {
        $starweb = $this->getStarweb();
        $resource = $starweb->resource('ProductCategory');

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(ProductCategoryResource::class, $resource);
    }

    /**
     * @expectedException \LogicException
     */
    public function testInvalidResource()
    {
        $starweb = $this->getStarweb();
        $resource = $starweb->resource('InvalidResource');
    }

    private function getStreamFactory()
    {
        if (!$this->streamFactory) {
            $this->streamFactory = StreamFactoryDiscovery::find();
        }

        return $this->streamFactory;
    }
}

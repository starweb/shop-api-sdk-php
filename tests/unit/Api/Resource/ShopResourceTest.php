<?php

namespace Starweb\Tests\Api\Resource;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Model\Shop\Shop;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\ShopResource;
use Starweb\HttpClient\EnhancedHttpClient;
use Starweb\HttpClient\Message\EnhancedResponse;

class ShopResourceTest extends TestCase
{
    public function testConstructor()
    {
        $client = $this->createMock(EnhancedHttpClient::class);
        $resource = new ShopResource($client);

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(ShopResource::class, $resource);
    }
    public function testRetrieve()
    {
        $shop = new Shop();
        $shop->setName('my shop');
        $response = $this->createMock(EnhancedResponse::class);
        $client = $this->createMock(EnhancedHttpClient::class);
        $resource = new ShopResource($client);
        $response->method('getContentAsModel')->willReturn($shop);
        $client->method('get')->willReturn($response);

        $this->assertInstanceOf(Shop::class, $resource->retrieve());
        $this->assertEquals('my shop', $resource->retrieve()->getName());
    }
}

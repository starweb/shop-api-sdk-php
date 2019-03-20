<?php

namespace Starweb\Tests\Api\Resource;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Model\Shop\Shop;
use Starweb\Api\Model\Shop\ShopItem;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\Api\Resource\ShopResource;
use Starweb\HttpClient\DecoratedHttpClient;
use Starweb\HttpClient\Message\DecoratedResponse;

class ShopResourceTest extends TestCase
{
    public function testConstructor()
    {
        $client = $this->createMock(DecoratedHttpClient::class);
        $resource = new ShopResource($client);

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(ShopResource::class, $resource);
    }
    public function testRetrieve()
    {
        $shop = new Shop();
        $shop->setName('my shop');

        $shopItem = new ShopItem();
        $shopItem->setData($shop);

        $response = $this->createMock(DecoratedResponse::class);
        $client = $this->createMock(DecoratedHttpClient::class);
        $resource = new ShopResource($client);
        $response->method('getContentAsModel')->willReturn($shopItem);
        $client->method('get')->willReturn($response);

        $this->assertInstanceOf(Shop::class, $resource->retrieve());
        $this->assertEquals('my shop', $resource->retrieve()->getName());
    }
}

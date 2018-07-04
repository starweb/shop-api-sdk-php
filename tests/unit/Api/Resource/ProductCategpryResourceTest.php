<?php

namespace Starweb\Tests\Api\Resource;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Model\CollectionInterface;
use Starweb\Api\Model\ProductCategory;
use Starweb\Api\Resource\ProductCategoryResource;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\HttpClient\EnhancedHttpClient;
use Starweb\HttpClient\Message\EnhancedResponse;

class ProductCategpryResourceTest extends TestCase
{
    public function testConstructor()
    {
        $client = $this->createMock(EnhancedHttpClient::class);
        $resource = new ProductCategoryResource($client);

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(ProductCategoryResource::class, $resource);
    }

    public function list()
    {
        $category = new ProductCategory();
        $category->setCategoryId(1);

        $collection = new CollectionInterface();
        $collection->setItems([$category]);

        $response = $this->createMock(EnhancedResponse::class);
        $client = $this->createMock(EnhancedHttpClient::class);
        $resource = new ProductCategoryResource($client);

        $response->method('getContentAsModel')->willReturn($collection);
        $client->method('get')->willReturn($response);

        $response = $resource->list();
        $this->assertInstanceOf(CollectionInterface::class, $response);
        $this->assertEquals(1, count($response));
        $this->assertInstanceOf(ProductCategory::class, current($response));
        $this->assertEquals(1, current($response)->getCategoryId());
    }

    public function testRetrieve()
    {
        $productCategory = new ProductCategory();
        $productCategory->setCategoryId(1);

        $response = $this->createMock(EnhancedResponse::class);
        $client = $this->createMock(EnhancedHttpClient::class);
        $resource = new ProductCategoryResource($client);

        $response->method('getContentAsModel')->willReturn($productCategory);
        $client->method('get')->willReturn($response);

        $this->assertInstanceOf(ProductCategory::class, $resource->retrieve(1));
        $this->assertEquals(1, $resource->retrieve(1)->getCategoryId());
    }
}

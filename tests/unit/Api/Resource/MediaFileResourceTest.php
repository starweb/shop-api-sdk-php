<?php

namespace Starweb\Tests\Api\Resource;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Model\CollectionInterface;
use Starweb\Api\Model\MediaFile\MediaFile;
use Starweb\Api\Model\MediaFile\MediaFileCollection;
use Starweb\Api\Model\MediaFile\MediaFileItem;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\HttpClient\DecoratedHttpClient;
use Starweb\HttpClient\Message\DecoratedResponse;

class MediaFileResourceTest extends TestCase
{
    public function testConstructor()
    {
        $client = $this->createMock(DecoratedHttpClient::class);
        $resource = new MediaFileResource($client);

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(MediaFileResource::class, $resource);
    }

    public function list()
    {
        $response = $this->createMock(DecoratedResponse::class);
        $client = $this->createMock(DecoratedHttpClient::class);
        $resource = new MediaFileResource($client);

        $response->method('getContentAsModel')->willReturn(new MediaFileCollection());
        $client->method('get')->willReturn($response);

        $response = $resource->list();
        $this->assertInstanceOf(CollectionInterface::class, $response);
        $this->assertInstanceOf(CollectionInterface::class, $response);
        $this->assertEquals(1, count($response));
        $this->assertInstanceOf(MediaFile::class, current($response));
        $this->assertEquals(1, current($response)->getCategoryId());
    }

    public function testRetrieve()
    {
        $mediaFile = new MediaFile();
        $mediaFile->setName('the name');

        $mediaFileItem = new MediaFileItem();
        $mediaFileItem->setData($mediaFile);

        $response = $this->createMock(DecoratedResponse::class);
        $client = $this->createMock(DecoratedHttpClient::class);
        $resource = new MediaFileResource($client);

        $response->method('getContentAsModel')->willReturn($mediaFileItem);
        $client->method('get')->willReturn($response);

        $this->assertInstanceOf(MediaFile::class, $resource->retrieve(1));
        $this->assertEquals('the name', $resource->retrieve(1)->getName());
    }
}

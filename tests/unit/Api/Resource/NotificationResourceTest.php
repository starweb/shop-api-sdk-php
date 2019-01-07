<?php

namespace Starweb\Tests\Api\Resource;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Model\CollectionInterface;
use Starweb\Api\Model\Notification\Notification;
use Starweb\Api\Resource\MediaFileResource;
use Starweb\Api\Resource\NotificationResource;
use Starweb\Api\Resource\Resource;
use Starweb\Api\Resource\ResourceInterface;
use Starweb\HttpClient\EnhancedHttpClient;
use Starweb\HttpClient\Message\EnhancedResponse;

class NotificationResourceTest extends TestCase
{
    public function testConstructor()
    {
        $client = $this->createMock(EnhancedHttpClient::class);
        $resource = new NotificationResource($client);

        $this->assertInstanceOf(ResourceInterface::class, $resource);
        $this->assertInstanceOf(Resource::class, $resource);
        $this->assertInstanceOf(NotificationResource::class, $resource);
    }

    public function create()
    {
        $response = $this->createMock(EnhancedResponse::class);
        $client = $this->createMock(EnhancedHttpClient::class);
        $resource = new NotificationResource($client);

        $notification = new Notification();
        $notification->setText('a new message');
        $notification->getAdminUserId(1);

        $response->method('getContentAsModel')->willReturn($notification);
        $client->method('get')->willReturn($response);

        $response = $resource->create($notification);
        $this->assertInstanceOf(CollectionInterface::class, $response);
        $this->assertInstanceOf(CollectionInterface::class, $response);
        $this->assertEquals(1, count($response));
        $this->assertInstanceOf(Notification::class, current($response));
        $this->assertEquals(1, current($response)->getAdminUserId());
    }
}

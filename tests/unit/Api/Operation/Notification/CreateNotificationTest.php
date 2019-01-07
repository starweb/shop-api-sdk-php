<?php declare(strict_types=1);

namespace Starweb\Tests\Api\Operation\Notification;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Operation\Notification\CreateNotification;
use Starweb\Api\Operation\Operation;
use Starweb\Api\Resource\NotificationResource;

class CreateNotificationTest extends TestCase
{
    public function testCreateOperation()
    {
        $notificationResource = $this->createMock(NotificationResource::class);
        $operation = new CreateNotification($notificationResource);

        $this->assertInstanceOf(Operation::class, $operation);
        $this->assertSame('/notifications', $operation->getPath());
        $this->assertSame('POST', $operation->getMethod());
    }
}

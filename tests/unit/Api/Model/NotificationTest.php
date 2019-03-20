<?php declare(strict_types=1);

namespace Starweb\Tests\Api\Model;

use PHPUnit\Framework\TestCase;
use Starweb\Api\Model\Notification\Notification;

class NotificationTest extends TestCase
{
    public function testModel()
    {
        $notification = new Notification();
        $notification->setText('a message');
        $notification->setAdminUserId(1);

        $this->assertInstanceOf(Notification::class, $notification);
        $this->assertSame('a message', $notification->getText());
        $this->assertSame(1, $notification->getAdminUserId());
        $this->assertNull($notification->getAdminSuperuserUsername());
    }
}

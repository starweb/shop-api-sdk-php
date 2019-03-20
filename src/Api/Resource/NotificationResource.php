<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Notification\Notification;
use Starweb\Api\Model\Notification\NotificationItem;
use Starweb\Api\Operation\Notification\CreateNotification;

class NotificationResource extends Resource
{
    /**
     * @param Notification $notification
     *
     * @return Notification
     *
     * @throws \Http\Client\Exception
     */
    public function create(Notification $notification): Notification
    {
        $response = $this->performOperation(
            new CreateNotification(
                $this,
                $this->getSerializer()->normalize($notification),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(NotificationItem::class);

        return $item->getData();
    }
}

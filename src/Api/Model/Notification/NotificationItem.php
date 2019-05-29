<?php declare(strict_types=1);

namespace Starweb\Api\Model\Notification;

class NotificationItem
{
    /**
     * @var Notification
     */
    protected $data;

    /**
     *
     *
     * @return Notification
     */
    public function getData(): ?Notification
    {
        return $this->data;
    }

    /**
     *
     *
     * @param Notification $data
     *
     * @return self
     */
    public function setData(Notification $data): self
    {
        $this->data = $data;

        return $this;
    }
}

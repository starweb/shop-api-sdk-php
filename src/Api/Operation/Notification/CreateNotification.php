<?php

namespace Starweb\Api\Operation\Notification;

use Starweb\Api\Operation\Operation;

class CreateNotification extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/notifications';
    }
}

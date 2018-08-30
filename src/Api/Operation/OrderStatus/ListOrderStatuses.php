<?php

namespace Starweb\Api\Operation\OrderStatus;

use Starweb\Api\Operation\Operation;

class ListOrderStatuses extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/order-statuses';
    }
}

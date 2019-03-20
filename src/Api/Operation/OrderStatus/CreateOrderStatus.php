<?php

namespace Starweb\Api\Operation\OrderStatus;

use Starweb\Api\Operation\Operation;

class CreateOrderStatus extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/order-statuses';
    }
}

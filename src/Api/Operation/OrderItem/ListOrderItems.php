<?php

namespace Starweb\Api\Operation\OrderItem;

use Starweb\Api\Operation\Operation;

class ListOrderItems extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/items';
    }
}

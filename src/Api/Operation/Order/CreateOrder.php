<?php

namespace Starweb\Api\Operation\Order;

use Starweb\Api\Operation\Operation;

class CreateOrder extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/orders';
    }
}

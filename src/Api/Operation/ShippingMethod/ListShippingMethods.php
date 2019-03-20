<?php

namespace Starweb\Api\Operation\ShippingMethod;

use Starweb\Api\Operation\Operation;

class ListShippingMethods extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/shipping-methods';
    }
}

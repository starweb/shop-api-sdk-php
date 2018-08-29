<?php

namespace Starweb\Api\Operation\ProductStockStatus;

use Starweb\Api\Operation\Operation;

class ListProductStockStatses extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/product-stock-statuses';
    }
}

<?php

namespace Starweb\Api\Operation\ProductStockStatus;

use Starweb\Api\Operation\Operation;

class CreateProductStockStatus extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/product-stock-statuses';
    }
}

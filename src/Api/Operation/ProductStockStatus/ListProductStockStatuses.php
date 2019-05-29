<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductStockStatus;

use Starweb\Api\Operation\Operation;

class ListProductStockStatuses extends Operation
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

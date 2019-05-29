<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductUnit;

use Starweb\Api\Operation\Operation;

class ListProductUnits extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/product-units';
    }
}

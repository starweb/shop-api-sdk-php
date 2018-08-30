<?php

namespace Starweb\Api\Operation\ProductManufacturer;

use Starweb\Api\Operation\Operation;

class ListProductManufacturers extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/product-manufacturers';
    }
}

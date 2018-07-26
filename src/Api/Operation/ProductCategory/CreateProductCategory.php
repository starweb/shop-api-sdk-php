<?php

namespace Starweb\Api\Operation\ProductCategory;

use Starweb\Api\Operation\Operation;

class CreateProductCategory extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/product-categories';
    }
}

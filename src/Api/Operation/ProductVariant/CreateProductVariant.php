<?php

namespace Starweb\Api\Operation\ProductVariant;

use Starweb\Api\Operation\Operation;

class CreateProductVariant extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants';
    }
}

<?php

namespace Starweb\Api\Operation\ProductMetaData;

use Starweb\Api\Operation\Operation;

class CreateProductMetaData extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/products/{productId}/meta-data';
    }
}

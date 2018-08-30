<?php

namespace Starweb\Api\Operation\ProductCategoryLink;

use Starweb\Api\Operation\Operation;

class ListProductCategoryLinks extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/categories';
    }
}

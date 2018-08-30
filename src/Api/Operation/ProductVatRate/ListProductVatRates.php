<?php

namespace Starweb\Api\Operation\ProductVatRate;

use Starweb\Api\Operation\Operation;

class ListProductVatRates extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/vat-rates';
    }
}

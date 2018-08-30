<?php

namespace Starweb\Api\Operation\ProductVariantPricelistPrice;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProductVariantPricelistPrices extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants/{variantId}/prices';
    }
}

<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantPricelistPrice;

use Starweb\Api\Operation\Operation;

class CreateProductVariantPricelistPrice extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants/{variantId}/prices';
    }
}

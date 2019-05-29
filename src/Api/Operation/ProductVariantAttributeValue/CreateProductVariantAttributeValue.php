<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantAttributeValue;

use Starweb\Api\Operation\Operation;

class CreateProductVariantAttributeValue extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/product-attributes/{attributeId}/values';
    }
}

<?php

namespace Starweb\Api\Operation\ProductVariantAttributeValue;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

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

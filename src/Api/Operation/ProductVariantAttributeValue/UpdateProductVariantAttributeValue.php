<?php

namespace Starweb\Api\Operation\ProductVariantAttributeValue;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateProductVariantAttributeValue extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/product-attributes/{attributeId}/values/{attributeValueId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('attributeValueId');
        $resolver->setAllowedTypes('attributeValueId', 'integer');

        return $resolver;
    }
}

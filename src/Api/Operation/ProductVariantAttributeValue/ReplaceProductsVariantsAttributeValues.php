<?php

namespace Starweb\Api\Operation\ProductVariantAttributeValue;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceProductsVariantsAttributeValues extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/product-attributes/{attributeId}/values/{attributeValueId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('attributeId');
        $resolver->setAllowedTypes('attributeId', 'integer');
        $resolver->setRequired('attributeValueId');
        $resolver->setAllowedTypes('attributeValueId', 'integer');

        return $resolver;
    }
}

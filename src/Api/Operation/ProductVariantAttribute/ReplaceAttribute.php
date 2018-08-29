<?php

namespace Starweb\Api\Operation\ProductVariantAttribute;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceAttribute extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/product-attributes/{attributeId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('attributeId');
        $resolver->setAllowedTypes('attributeId', 'integer');

        return $resolver;
    }
}

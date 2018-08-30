<?php

namespace Starweb\Api\Operation\ProductVariantAttribute;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductVariantAttribute extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
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

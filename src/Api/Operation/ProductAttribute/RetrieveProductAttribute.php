<?php

namespace Starweb\Api\Operation\ProductAttribute;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductAttribute extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/attributes/{attributeId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('attributeId');
        $resolver->setAllowedTypes('attributeId', 'integer');

        return $resolver;
    }
}

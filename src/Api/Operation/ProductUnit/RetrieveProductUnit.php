<?php

namespace Starweb\Api\Operation\ProductUnit;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductUnit extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/product-units/{unitId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('unitId');
        $resolver->setAllowedTypes('unitId', 'integer');

        return $resolver;
    }
}

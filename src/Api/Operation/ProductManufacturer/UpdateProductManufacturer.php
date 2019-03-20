<?php

namespace Starweb\Api\Operation\ProductManufacturer;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateProductManufacturer extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/product-manufacturers/{manufacturerId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('manufacturerId');
        $resolver->setAllowedTypes('manufacturerId', 'integer');

        return $resolver;
    }
}

<?php

namespace Starweb\Api\Operation\Pricelist;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrievePricelist extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/pricelists/{pricelistId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('pricelistId');
        $resolver->setAllowedTypes('pricelistId', 'integer');

        return $resolver;
    }
}

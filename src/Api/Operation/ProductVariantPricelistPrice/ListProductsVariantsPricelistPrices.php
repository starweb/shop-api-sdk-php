<?php

namespace Starweb\Api\Operation\ProductVariantPricelistPrice;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProductsVariantsPricelistPrices extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants/{variantId}/prices';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'integer');
        $resolver->setRequired('variantId');
        $resolver->setAllowedTypes('variantId', 'integer');

        return $resolver;
    }
}

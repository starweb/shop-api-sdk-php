<?php

namespace Starweb\Api\Operation\ProductVatRate;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductsVatRate extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/vat-rates/{countryCode}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'integer');
        $resolver->setRequired('countryCode');
        $resolver->setAllowedTypes('countryCode', 'string');

        return $resolver;
    }
}

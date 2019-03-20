<?php

namespace Starweb\Api\Operation\ShippingMethod;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveShippingMethod extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/shipping-methods/{shippingMethodId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('shippingMethodId');
        $resolver->setAllowedTypes('shippingMethodId', 'integer');

        return $resolver;
    }
}

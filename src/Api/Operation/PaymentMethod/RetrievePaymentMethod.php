<?php

namespace Starweb\Api\Operation\PaymentMethod;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrievePaymentMethod extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/payment-methods/{paymentMethodId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('paymentMethodId');
        $resolver->setAllowedTypes('paymentMethodId', 'integer');

        return $resolver;
    }
}

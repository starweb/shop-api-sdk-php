<?php

namespace Starweb\Api\Operation\CustomerAddress;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateCustomerAddress extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/addresses/{addressType}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('customerId');
        $resolver->setAllowedTypes('customerId', 'integer');
        $resolver->setRequired('addressType');
        $resolver->setAllowedTypes('addressType', 'string');

        return $resolver;
    }
}

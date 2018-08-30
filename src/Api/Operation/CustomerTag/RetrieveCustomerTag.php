<?php

namespace Starweb\Api\Operation\CustomerTag;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveCustomerTag extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/tags/{tagId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('tagId');
        $resolver->setAllowedTypes('tagId', 'int');

        return $resolver;
    }
}

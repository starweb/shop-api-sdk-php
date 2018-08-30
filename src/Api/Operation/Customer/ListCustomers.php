<?php

namespace Starweb\Api\Operation\Customer;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListCustomers extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customers';
    }

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('page');
        $resolver->setAllowedTypes('page', 'integer');
        $resolver->setDefined('sortBy');
        $resolver->setAllowedTypes('sortBy', 'string');
        $resolver->setDefined('sortOrder');
        $resolver->setAllowedTypes('sortOrder', 'string');
        $resolver->setDefined('createdSince');
        $resolver->setAllowedTypes('createdSince', 'string');
        $resolver->setDefined('updatedSince');
        $resolver->setAllowedTypes('updatedSince', 'string');
        $resolver->setDefined('includeWithoutAccount');
        $resolver->setAllowedTypes('includeWithoutAccount', 'boolean');
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');

        return $resolver;
    }
}

<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Customer;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveCustomer extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('customerId');
        $resolver->setAllowedTypes('customerId', 'integer');

        return $resolver;
    }

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');

        return $resolver;
    }
}

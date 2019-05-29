<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Customer;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeleteCustomer extends Operation
{
    public function getMethod(): string
    {
        return 'DELETE';
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
}

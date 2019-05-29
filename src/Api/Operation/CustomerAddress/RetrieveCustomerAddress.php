<?php declare(strict_types=1);

namespace Starweb\Api\Operation\CustomerAddress;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveCustomerAddress extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/addresses/{addressType}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('addressType');
        $resolver->setAllowedTypes('addressType', 'string');

        return $resolver;
    }
}

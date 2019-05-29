<?php declare(strict_types=1);

namespace Starweb\Api\Operation\CustomerExternalService;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveCustomerExternalService extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customers/{customerId}/external-services/{serviceName}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('serviceName');
        $resolver->setAllowedTypes('serviceName', 'string');

        return $resolver;
    }
}

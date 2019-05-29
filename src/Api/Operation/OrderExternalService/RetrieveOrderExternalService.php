<?php declare(strict_types=1);

namespace Starweb\Api\Operation\OrderExternalService;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveOrderExternalService extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/external-services/{serviceName}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('serviceName');
        $resolver->setAllowedTypes('serviceName', 'string');

        return $resolver;
    }
}

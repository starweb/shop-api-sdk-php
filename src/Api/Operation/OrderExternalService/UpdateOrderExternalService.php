<?php declare(strict_types=1);

namespace Starweb\Api\Operation\OrderExternalService;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateOrderExternalService extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/external-services/{serviceName}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'integer');
        $resolver->setRequired('serviceName');
        $resolver->setAllowedTypes('serviceName', 'string');

        return $resolver;
    }
}

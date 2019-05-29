<?php declare(strict_types=1);

namespace Starweb\Api\Operation\OrderExternalService;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateOrderExternalService extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/external-services';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'integer');

        return $resolver;
    }
}

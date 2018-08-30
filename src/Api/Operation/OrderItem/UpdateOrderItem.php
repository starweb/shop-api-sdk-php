<?php

namespace Starweb\Api\Operation\OrderItem;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateOrderItem extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/items/{orderItemId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('orderItemId');
        $resolver->setAllowedTypes('orderItemId', 'integer');

        return $resolver;
    }
}

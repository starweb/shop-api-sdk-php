<?php

namespace Starweb\Api\Operation\OrderItem;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceOrderItem extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/items/{orderItemId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'integer');
        $resolver->setRequired('orderItemId');
        $resolver->setAllowedTypes('orderItemId', 'integer');

        return $resolver;
    }
}

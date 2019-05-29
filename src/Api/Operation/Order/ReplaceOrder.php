<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Order;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceOrder extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'integer');

        return $resolver;
    }
}

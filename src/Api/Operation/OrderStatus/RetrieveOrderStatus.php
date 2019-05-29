<?php declare(strict_types=1);

namespace Starweb\Api\Operation\OrderStatus;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveOrderStatus extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/order-statuses/{orderStatusId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('orderStatusId');
        $resolver->setAllowedTypes('orderStatusId', 'integer');

        return $resolver;
    }
}

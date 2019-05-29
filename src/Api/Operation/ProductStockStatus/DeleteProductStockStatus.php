<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductStockStatus;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeleteProductStockStatus extends Operation
{
    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getPath(): string
    {
        return '/product-stock-statuses/{stockStatusId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('stockStatusId');
        $resolver->setAllowedTypes('stockStatusId', 'integer');

        return $resolver;
    }
}

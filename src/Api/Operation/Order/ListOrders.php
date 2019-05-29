<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Order;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListOrders extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/orders';
    }

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('page');
        $resolver->setAllowedTypes('page', 'integer');
        $resolver->setDefined('includeNonCompletePayments');
        $resolver->setAllowedTypes('includeNonCompletePayments', 'boolean');
        $resolver->setDefined('filterQuery');
        $resolver->setAllowedTypes('filterQuery', 'string');
        $resolver->setDefined('filterPaymentMethodId');
        $resolver->setAllowedTypes('filterPaymentMethodId', 'integer');
        $resolver->setDefined('filterShippingMethodId');
        $resolver->setAllowedTypes('filterShippingMethodId', 'integer');
        $resolver->setDefined('ordersCreatedAfter');
        $resolver->setAllowedTypes('ordersCreatedAfter', 'string');
        $resolver->setDefined('ordersCreatedBefore');
        $resolver->setAllowedTypes('ordersCreatedBefore', 'string');
        $resolver->setDefined('statusFilter');
        $resolver->setAllowedTypes('statusFilter', 'integer');
        $resolver->setDefined('sortBy');
        $resolver->setAllowedTypes('sortBy', 'string');
        $resolver->setDefined('sortOrder');
        $resolver->setAllowedTypes('sortOrder', 'string');
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');

        return $resolver;
    }
}

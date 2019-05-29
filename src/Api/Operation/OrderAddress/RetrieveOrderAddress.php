<?php declare(strict_types=1);

namespace Starweb\Api\Operation\OrderAddress;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveOrderAddress extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/addresses/{addressType}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'integer');
        $resolver->setRequired('addressType');
        $resolver->setAllowedTypes('addressType', 'string');

        return $resolver;
    }
}

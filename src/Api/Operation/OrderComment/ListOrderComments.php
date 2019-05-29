<?php declare(strict_types=1);

namespace Starweb\Api\Operation\OrderComment;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListOrderComments extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/comments';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'integer');

        return $resolver;
    }
}

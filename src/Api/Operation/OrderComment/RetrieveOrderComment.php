<?php

namespace Starweb\Api\Operation\OrderComment;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveOrderComment extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/orders/{orderId}/comments/{commentId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('commentId');
        $resolver->setAllowedTypes('commentId', 'integer');

        return $resolver;
    }
}

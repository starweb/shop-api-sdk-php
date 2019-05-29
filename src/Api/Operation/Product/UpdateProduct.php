<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Product;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateProduct extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/products/{productId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'integer');

        return $resolver;
    }
}

<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariant;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProductVariants extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants';
    }

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('page');
        $resolver->setAllowedTypes('page', 'integer');
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');

        return $resolver;
    }
}

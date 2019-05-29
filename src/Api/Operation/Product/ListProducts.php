<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Product;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProducts extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products';
    }

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('page');
        $resolver->setAllowedTypes('page', 'integer');
        $resolver->setDefined('createdSince');
        $resolver->setAllowedTypes('createdSince', 'string');
        $resolver->setDefined('updatedSince');
        $resolver->setAllowedTypes('updatedSince', 'string');
        $resolver->setDefined('filterVisible');
        $resolver->setAllowedTypes('filterVisible', 'boolean');
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');

        return $resolver;
    }
}

<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductCategory;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProductCategories extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/product-categories';
    }

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('page');
        $resolver->setAllowedTypes('page', 'string');
        $resolver->setDefined('externalId');
        $resolver->setAllowedTypes('externalId', 'string');
        $resolver->setDefined('parent');
        $resolver->setAllowedTypes('parent', 'int');
        $resolver->setDefined('filterVisible');
        $resolver->setAllowedTypes('filterVisible', 'bool');
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');
        $resolver->setAllowedValues('include', 'languages');

        return $resolver;
    }
}

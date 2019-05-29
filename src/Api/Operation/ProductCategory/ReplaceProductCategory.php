<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductCategory;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceProductCategory extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/product-categories/{productCategoryId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productCategoryId');
        $resolver->setAllowedTypes('productCategoryId', 'int');

        return $resolver;
    }
}

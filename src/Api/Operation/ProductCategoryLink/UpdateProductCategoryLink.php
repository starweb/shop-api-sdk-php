<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductCategoryLink;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateProductCategoryLink extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/products/{productId}/categories/{categoryId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('categoryId');
        $resolver->setAllowedTypes('categoryId', 'integer');

        return $resolver;
    }
}

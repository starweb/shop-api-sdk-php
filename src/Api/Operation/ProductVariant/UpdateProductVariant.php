<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariant;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateProductVariant extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants/{variantId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('variantId');
        $resolver->setAllowedTypes('variantId', 'integer');

        return $resolver;
    }
}

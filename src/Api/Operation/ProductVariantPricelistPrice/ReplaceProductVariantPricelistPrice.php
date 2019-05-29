<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantPricelistPrice;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceProductVariantPricelistPrice extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants/{variantId}/prices/{pricelistId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'integer');
        $resolver->setRequired('variantId');
        $resolver->setAllowedTypes('variantId', 'integer');
        $resolver->setRequired('pricelistId');
        $resolver->setAllowedTypes('pricelistId', 'integer');

        return $resolver;
    }
}

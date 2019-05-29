<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantPricelistPrice;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeleteProductVariantPricelistPrice extends Operation
{
    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getPath(): string
    {
        return '/products/{productId}/variants/{variantId}/prices/{pricelistId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('pricelistId');
        $resolver->setAllowedTypes('pricelistId', 'integer');

        return $resolver;
    }
}

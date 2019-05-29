<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariant;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductVariant extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
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

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');

        return $resolver;
    }
}

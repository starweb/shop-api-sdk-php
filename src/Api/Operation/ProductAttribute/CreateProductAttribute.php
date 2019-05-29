<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductAttribute;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateProductAttribute extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/products/{productId}/attributes';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'integer');

        return $resolver;
    }
}

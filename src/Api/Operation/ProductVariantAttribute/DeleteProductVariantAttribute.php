<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantAttribute;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeleteProductVariantAttribute extends Operation
{
    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getPath(): string
    {
        return '/product-attributes/{attributeId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('attributeId');
        $resolver->setAllowedTypes('attributeId', 'integer');

        return $resolver;
    }
}

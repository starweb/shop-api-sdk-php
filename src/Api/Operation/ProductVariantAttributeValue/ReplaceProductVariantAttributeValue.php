<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantAttributeValue;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceProductVariantAttributeValue extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/product-attributes/{attributeId}/values/{attributeValueId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('attributeValueId');
        $resolver->setAllowedTypes('attributeValueId', 'integer');

        return $resolver;
    }
}

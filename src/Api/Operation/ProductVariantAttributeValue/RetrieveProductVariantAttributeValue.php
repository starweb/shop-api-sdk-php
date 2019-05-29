<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantAttributeValue;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductVariantAttributeValue extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
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

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('include');
        $resolver->setAllowedTypes('include', 'string');

        return $resolver;
    }
}

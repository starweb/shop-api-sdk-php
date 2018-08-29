<?php

namespace Starweb\Api\Operation\ProductMetaDatum;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductsMetaData extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/meta-data/{metaDataTypeId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'integer');
        $resolver->setRequired('metaDataTypeId');
        $resolver->setAllowedTypes('metaDataTypeId', 'integer');

        return $resolver;
    }
}

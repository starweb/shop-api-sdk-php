<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductMetaDataType;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveProductMetaDataType extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/product-meta-data-types/{metaDataTypeId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('metaDataTypeId');
        $resolver->setAllowedTypes('metaDataTypeId', 'integer');

        return $resolver;
    }
}

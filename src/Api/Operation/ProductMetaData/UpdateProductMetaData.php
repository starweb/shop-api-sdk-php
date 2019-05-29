<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductMetaData;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateProductMetaData extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/products/{productId}/meta-data/{metaDataTypeId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('metaDataTypeId');
        $resolver->setAllowedTypes('metaDataTypeId', 'integer');

        return $resolver;
    }
}

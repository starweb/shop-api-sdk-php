<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductMediaFileLink;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateProductMediaFileLink extends Operation
{
    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getPath(): string
    {
        return '/products/{productId}/media-files/{mediaFileId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'integer');
        $resolver->setRequired('mediaFileId');
        $resolver->setAllowedTypes('mediaFileId', 'integer');

        return $resolver;
    }
}

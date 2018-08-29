<?php

namespace Starweb\Api\Operation\MediaFile;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeleteMediaFile extends Operation
{
    public function getMethod() : string
    {
        return 'DELETE';
    }

    public function getPath(): string
    {
        return '/media-files/{mediaFileId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired(['mediaFileId']);
        $resolver->setAllowedTypes('mediaFileId', 'int');

        return $resolver;
    }
}
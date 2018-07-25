<?php

namespace Starweb\Api\Operation\MediaFiles;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListMediaFiles extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/media-files';
    }

    protected function getQueryParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->isDefined(['page']);

        return $resolver;
    }
}

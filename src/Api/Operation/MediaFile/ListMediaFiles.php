<?php declare(strict_types=1);

namespace Starweb\Api\Operation\MediaFile;

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

    protected function getParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined(['page']);

        return $resolver;
    }
}

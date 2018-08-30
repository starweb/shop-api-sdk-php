<?php

namespace Starweb\Api\Operation\ProductMediaFileLink;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateProductMediaFileLink extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/products/{productId}/media-files';
    }
}

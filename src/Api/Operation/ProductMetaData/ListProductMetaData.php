<?php

namespace Starweb\Api\Operation\ProductMetaData;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProductMetaData extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/meta-data';
    }
}

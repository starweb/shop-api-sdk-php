<?php

namespace Starweb\Api\Operation\ProductLanguage;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProductLanguages extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/languages';
    }
}

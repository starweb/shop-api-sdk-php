<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductLanguage;

use Starweb\Api\Operation\Operation;

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

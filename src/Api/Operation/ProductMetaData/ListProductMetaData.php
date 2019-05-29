<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductMetaData;

use Starweb\Api\Operation\Operation;

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

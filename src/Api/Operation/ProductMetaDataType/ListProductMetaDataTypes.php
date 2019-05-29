<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductMetaDataType;

use Starweb\Api\Operation\Operation;

class ListProductMetaDataTypes extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/product-meta-data-types';
    }
}

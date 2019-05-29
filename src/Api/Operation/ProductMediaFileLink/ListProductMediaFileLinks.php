<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductMediaFileLink;

use Starweb\Api\Operation\Operation;

class ListProductMediaFileLinks extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/products/{productId}/media-files';
    }
}

<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Shop;

use Starweb\Api\Operation\Operation;

class RetrieveShop extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/shop';
    }
}

<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Product;

use Starweb\Api\Operation\Operation;

class CreateProduct extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/products';
    }
}

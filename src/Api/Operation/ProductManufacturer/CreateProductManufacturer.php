<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductManufacturer;

use Starweb\Api\Operation\Operation;

class CreateProductManufacturer extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/product-manufacturers';
    }
}

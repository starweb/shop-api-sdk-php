<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductVariantAttribute;

use Starweb\Api\Operation\Operation;

class CreateProductVariantAttribute extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/product-attributes';
    }
}

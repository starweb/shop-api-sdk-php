<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductCategoryLink;

use Starweb\Api\Operation\Operation;

class CreateProductCategoryLink extends Operation
{
    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return '/products/{productId}/categories';
    }
}

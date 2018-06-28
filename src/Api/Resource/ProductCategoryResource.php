<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Collection;
use Starweb\Api\Model\ModelInterface;
use Starweb\Api\Model\ProductCategory;

class ProductCategoryResource extends Resource
{
    public function all(): Collection
    {
        return $this->get('/product-categories', [], [], Collection::class);
    }

    public function show(int $id): ModelInterface
    {
        return $this->get(sprintf('/product-categories/%s', $id), [], [], ProductCategory::class);
    }
}

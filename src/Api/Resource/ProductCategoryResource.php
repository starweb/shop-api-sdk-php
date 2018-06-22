<?php

namespace Starweb\Api\Resource;

class ProductCategoryResource extends Resource
{
    public function all(): array
    {
        return $this->get('/product-categories');
    }

    public function show(int $id): array
    {
        return $this->get(sprintf('/product-categories/%s', $id));
    }
}

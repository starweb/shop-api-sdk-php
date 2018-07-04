<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\CollectionInterface;
use Starweb\Api\Model\ProductCategory;
use Starweb\HttpClient\Message\EnhancedResponse;

class ProductCategoryResource extends Resource
{
    public function list(): CollectionInterface
    {
        $response = $this->getClient()->get('/product-categories');

        return $response->getContentAsModel(CollectionInterface::class);
    }

    public function retrieve(int $id): ProductCategory
    {
        $response = $this->getClient()->get(sprintf('/product-categories/%s', $id));

        return $response->getContentAsModel(ProductCategory::class);
    }

    public function create(ProductCategory $category): EnhancedResponse
    {
        return $this->createResource(sprintf('/product-categories/%s', $category->getId()), $category);
    }

    public function update(ProductCategory $category): EnhancedResponse
    {
        return $this->updateResource(sprintf('/product-categories/%s', $category->getId()), $category);
    }
}

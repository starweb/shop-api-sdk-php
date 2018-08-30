<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductCategory\ProductCategory;
use Starweb\Api\Model\ProductCategory\ProductCategoryItem;
use Starweb\Api\Operation\ProductCategory\CreateProductCategory;
use Starweb\Api\Operation\ProductCategory\DeleteProductCategory;
use Starweb\Api\Operation\ProductCategory\ListProductCategories;
use Starweb\Api\Model\ProductCategory\ProductCategoryCollection;
use Starweb\Api\Operation\ProductCategory\ReplaceProductCategory;
use Starweb\Api\Operation\ProductCategory\RetrieveProductCategory;
use Starweb\Api\Operation\ProductCategory\UpdateProductCategory;

class ProductCategoryResource extends Resource
{
    /**
     * @param array $parameters
     *
     * @return ProductCategoryCollection
     */
    public function list(array $parameters = []): ProductCategoryCollection
    {
        $response = $this->performOperation(new ListProductCategories($this, $parameters));

        return $response->getContentAsModel(ProductCategoryCollection::class);
    }

    /**
     * @param ProductCategory $productCategory
     *
     * @return ProductCategory
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductCategory $productCategory): ProductCategory
    {
        $response = $this->performOperation(
            new CreateProductCategory(
                $this,
                $this->getSerializer()->normalize($productCategory),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(ProductCategoryItem::class);

        return $item->getData();
    }

    /**
     * @param int $productCategoryId
     *
     * @return ProductCategory
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $productCategoryId): ProductCategory
    {
        $response = $this->performOperation(
            new RetrieveProductCategory($this, [], ['productCategoryId' => $productCategoryId])
        );
        $item = $response->getContentAsModel(ProductCategoryItem::class);

        return $item->getData();
    }

    /**
     * @param int $productCategoryId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $productCategoryId): bool
    {
        $response = $this->performOperation(
            new DeleteProductCategory($this, [], ['productCategoryId' => $productCategoryId])
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $productCategoryId
     * @param ProductCategory $productCategory
     *
     * @return ProductCategory
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $productCategoryId, ProductCategory $productCategory): ProductCategory
    {
        $response = $this->performOperation(
            new ReplaceProductCategory(
                $this,
                $this->getSerializer()->normalize($productCategory),
                ['productCategoryId' => $productCategoryId]
            )
        );
        $item = $response->getContentAsModel(ProductCategoryItem::class);

        return $item->getData();
    }

    /**
     * @param int $productCategoryId
     * @param ProductCategory $productCategory
     *
     * @return ProductCategory
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $productCategoryId, ProductCategory $productCategory): ProductCategory
    {
        $response = $this->performOperation(
            new UpdateProductCategory(
                $this,
                $this->getSerializer()->normalize($productCategory),
                ['productCategoryId' => $productCategoryId]
            )
        );
        $item = $response->getContentAsModel(ProductCategoryItem::class);

        return $item->getData();
    }
}

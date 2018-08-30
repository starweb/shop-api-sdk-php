<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Product\Product;
use Starweb\Api\Model\Product\ProductCollection;
use Starweb\Api\Model\Product\ProductItem;
use Starweb\Api\Operation\Product\CreateProduct;
use Starweb\Api\Operation\Product\DeleteProduct;
use Starweb\Api\Operation\Product\ListProducts;
use Starweb\Api\Operation\Product\ReplaceProduct;
use Starweb\Api\Operation\Product\RetrieveProduct;
use Starweb\Api\Operation\Product\UpdateProduct;

class ProductResource extends Resource
{
    /**
     * @param array $parameters
     *
     * @return ProductCollection
     */
    public function list(array $parameters = []): ProductCollection
    {
        $response = $this->performOperation(
            new ListProducts($this, $parameters, $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductCollection::class);
    }

    /**
     * @param Product $product
     *
     * @return Product
     *
     * @throws \Http\Client\Exception
     */
    public function create(Product $product): Product
    {
        $response = $this->performOperation(
            new CreateProduct(
                $this,
                $this->getSerializer()->normalize($product),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductItem::class);

        return $item->getData();
    }

    /**
     * @param int $productId
     * @param array $parameters
     *
     * @return Product
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $productId, $parameters = []): Product
    {
        $pathParameters = array_merge($this->getPathParameters(), ['productId' => $productId]);
        $response = $this->performOperation(
            new RetrieveProduct($this, $parameters, $pathParameters)
        );
        $item = $response->getContentAsModel(ProductItem::class);

        return $item->getData();
    }

    /**
     * @param int $productId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $productId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['productId' => $productId]);
        $response = $this->performOperation(
            new DeleteProduct($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $productId
     *
     * @return Product
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $productId, Product $product): Product
    {
        $pathParameters = array_merge($this->getPathParameters(), ['productId' => $productId]);
        $response = $this->performOperation(
            new ReplaceProduct(
                $this,
                $this->getSerializer()->normalize($product),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(ProductItem::class);

        return $item->getData();
    }

    /**
     * @param int $productId
     * @param Product $product
     *
     * @return Product
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $productId, Product $product): Product
    {
        $pathParameters = array_merge($this->getPathParameters(), ['productId' => $productId]);
        $response = $this->performOperation(
            new UpdateProduct(
                $this,
                $this->getSerializer()->normalize($product),
                $pathParameters
            )
        );
        $item = $response->getContentAsModel(ProductItem::class);

        return $item->getData();
    }
}

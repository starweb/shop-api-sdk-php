<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductVariantPricelistPrice\ProductVariantPricelistPriceCollection;
use Starweb\Api\Model\ProductVariantPricelistPrice\ProductVariantPricelistPrice;
use Starweb\Api\Model\ProductVariantPricelistPrice\ProductVariantPricelistPriceItem;
use Starweb\Api\Operation\ProductVariantPricelistPrice\CreateProductVariantPricelistPrice;
use Starweb\Api\Operation\ProductVariantPricelistPrice\DeleteProductVariantPricelistPrice;
use Starweb\Api\Operation\ProductVariantPricelistPrice\ListProductVariantPricelistPrices;
use Starweb\Api\Operation\ProductVariantPricelistPrice\ReplaceProductVariantPricelistPrice;
use Starweb\Api\Operation\ProductVariantPricelistPrice\RetrieveProductVariantPricelistPrice;
use Starweb\Api\Operation\ProductVariantPricelistPrice\UpdateProductVariantPricelistPrice;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductVariantPricelistPriceResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');
        $resolver->setRequired('variantId');
        $resolver->setAllowedTypes('variantId', 'int');

        return $resolver;
    }

    /**
     * @return ProductVariantPricelistPriceCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductVariantPricelistPriceCollection
    {
        $response = $this->performOperation(
            new ListProductVariantPricelistPrices($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductVariantPricelistPriceCollection::class);
    }

    /**
     * @param ProductVariantPricelistPrice $productVariantPricelistPrice
     *
     * @return ProductVariantPricelistPrice
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductVariantPricelistPrice $productVariantPricelistPrice): ProductVariantPricelistPrice
    {
        $response = $this->performOperation(
            new CreateProductVariantPricelistPrice(
                $this,
                $this->getSerializer()->normalize($productVariantPricelistPrice),
                $this->getPathParameters()
            )
        );
        $productVariantPricelistPrice = $response->getContentAsModel(ProductVariantPricelistPriceItem::class);

        return $productVariantPricelistPrice->getData();
    }

    /**
     * @param int $pricelistId
     *
     * @return ProductVariantPricelistPrice
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $pricelistId): ProductVariantPricelistPrice
    {
        $pathParameters = array_merge($this->getPathParameters(), ['pricelistId' => $pricelistId]);
        $response = $this->performOperation(
            new RetrieveProductVariantPricelistPrice($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductVariantPricelistPriceItem::class);

        return $item->getData();
    }

    /**
     * @param int $pricelistId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $pricelistId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['pricelistId' => $pricelistId]);
        $response = $this->performOperation(
            new DeleteProductVariantPricelistPrice($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $pricelistId
     * @param ProductVariantPricelistPrice $productVariantPricelistPrice
     *
     * @return ProductVariantPricelistPriceItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(
        string $pricelistId,
        ProductVariantPricelistPrice $productVariantPricelistPrice
    ): ProductVariantPricelistPriceItem {
        $pathParameters = array_merge($this->getPathParameters(), ['pricelistId' => $pricelistId]);
        $response = $this->performOperation(
            new ReplaceProductVariantPricelistPrice(
                $this,
                $this->getSerializer()->normalize($productVariantPricelistPrice),
                $pathParameters
            )
        );
        $productVariantPricelistPrice = $response->getContentAsModel(ProductVariantPricelistPriceItem::class);

        return $productVariantPricelistPrice->getData();
    }

    /**
     * @param int $pricelistId
     * @param ProductVariantPricelistPrice $productVariantPricelistPrice
     *
     * @return ProductVariantPricelistPrice
     *
     * @throws \Http\Client\Exception
     */
    public function update(
        string $pricelistId,
        ProductVariantPricelistPrice $productVariantPricelistPrice
    ): ProductVariantPricelistPrice {
        $pathParameters = array_merge($this->getPathParameters(), ['pricelistId' => $pricelistId]);
        $response = $this->performOperation(
            new UpdateProductVariantPricelistPrice(
                $this,
                $this->getSerializer()->normalize($productVariantPricelistPrice),
                $pathParameters
            )
        );
        $productVariantPricelistPrice = $response->getContentAsModel(ProductVariantPricelistPriceItem::class);

        return $productVariantPricelistPrice->getData();
    }
}

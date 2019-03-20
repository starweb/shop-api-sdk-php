<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductVariantAttribute\ProductVariantAttribute;
use Starweb\Api\Model\ProductVariantAttribute\ProductVariantAttributeItem;
use Starweb\Api\Operation\ProductVariantAttribute\CreateProductVariantAttribute;
use Starweb\Api\Operation\ProductVariantAttribute\DeleteProductVariantAttribute;
use Starweb\Api\Model\ProductVariantAttribute\ProductVariantAttributeCollection;
use Starweb\Api\Operation\ProductVariantAttribute\ListProductVariantAttributes;
use Starweb\Api\Operation\ProductVariantAttribute\ReplaceProductVariantAttribute;
use Starweb\Api\Operation\ProductVariantAttribute\RetrieveProductVariantAttribute;
use Starweb\Api\Operation\ProductVariantAttribute\UpdateProductVariantAttribute;

class ProductVariantAttributeResource extends Resource
{
    /**
     * @param array $parameters
     *
     * @return ProductVariantAttributeCollection
     */
    public function list(array $parameters = []): ProductVariantAttributeCollection
    {
        $response = $this->performOperation(new ListProductVariantAttributes($this, $parameters));

        return $response->getContentAsModel(ProductVariantAttributeCollection::class);
    }

    /**
     * @param ProductVariantAttribute $productVariantAttribute
     *
     * @return ProductVariantAttribute
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductVariantAttribute $productVariantAttribute): ProductVariantAttribute
    {
        $response = $this->performOperation(
            new CreateProductVariantAttribute(
                $this,
                $this->getSerializer()->normalize($productVariantAttribute),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductVariantAttributeItem::class);

        return $item->getData();
    }

    /**
     * @param int $attributeId
     *
     * @return ProductVariantAttribute
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $attributeId): ProductVariantAttribute
    {
        $response = $this->performOperation(
            new RetrieveProductVariantAttribute($this, [], ['attributeId' => $attributeId])
        );
        $item = $response->getContentAsModel(ProductVariantAttributeItem::class);

        return $item->getData();
    }

    /**
     * @param int $attributeId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $attributeId): bool
    {
        $response = $this->performOperation(
            new DeleteProductVariantAttribute($this, [], ['attributeId' => $attributeId])
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $attributeId
     * @param ProductVariantAttribute $productVariantAttribute
     *
     * @return ProductVariantAttribute
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $attributeId, ProductVariantAttribute $productVariantAttribute): ProductVariantAttribute
    {
        $response = $this->performOperation(
            new ReplaceProductVariantAttribute(
                $this,
                $this->getSerializer()->normalize($productVariantAttribute),
                ['attributeId' => $attributeId]
            )
        );
        $item = $response->getContentAsModel(ProductVariantAttributeItem::class);

        return $item->getData();
    }

    /**
     * @param int $attributeId
     * @param ProductVariantAttribute $productVariantAttribute
     *
     * @return ProductVariantAttribute
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $attributeId, ProductVariantAttribute $productVariantAttribute): ProductVariantAttribute
    {
        $response = $this->performOperation(
            new UpdateProductVariantAttribute(
                $this,
                $this->getSerializer()->normalize($productVariantAttribute),
                ['attributeId' => $attributeId]
            )
        );
        $item = $response->getContentAsModel(ProductVariantAttributeItem::class);

        return $item->getData();
    }
}

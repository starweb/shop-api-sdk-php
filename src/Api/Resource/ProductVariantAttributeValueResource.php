<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductVariantAttributeValue\ProductVariantAttributeValueCollection;
use Starweb\Api\Model\ProductVariantAttributeValue\ProductVariantAttributeValue;
use Starweb\Api\Model\ProductVariantAttributeValue\ProductVariantAttributeValueItem;
use Starweb\Api\Operation\ProductVariantAttributeValue\CreateProductVariantAttributeValue;
use Starweb\Api\Operation\ProductVariantAttributeValue\DeleteProductVariantAttributeValue;
use Starweb\Api\Operation\ProductVariantAttributeValue\ListProductVariantAttributeValues;
use Starweb\Api\Operation\ProductVariantAttributeValue\ReplaceProductVariantAttributeValue;
use Starweb\Api\Operation\ProductVariantAttributeValue\RetrieveProductVariantAttributeValue;
use Starweb\Api\Operation\ProductVariantAttributeValue\UpdateProductVariantAttributeValue;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductVariantAttributeValueResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('attributeId');
        $resolver->setAllowedTypes('attributeId', 'int');

        return $resolver;
    }

    /**
     * @param array $parameters
     *
     * @return ProductVariantAttributeValueCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(array $parameters = []): ProductVariantAttributeValueCollection
    {
        $response = $this->performOperation(
            new ListProductVariantAttributeValues($this, $parameters, $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductVariantAttributeValueCollection::class);
    }

    /**
     * @param ProductVariantAttributeValue $item
     *
     * @return ProductVariantAttributeValue
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductVariantAttributeValue $item): ProductVariantAttributeValue
    {
        $response = $this->performOperation(
            new CreateProductVariantAttributeValue(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(ProductVariantAttributeValueItem::class);

        return $item->getData();
    }

    /**
     * @param int $attributeValueId
     * @param array $parameters
     *
     * @return ProductVariantAttributeValue
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $attributeValueId, array $parameters = []): ProductVariantAttributeValue
    {
        $pathParameters = array_merge($this->getPathParameters(), ['attributeValueId' => $attributeValueId]);
        $response = $this->performOperation(
            new RetrieveProductVariantAttributeValue($this, $parameters, $pathParameters)
        );
        $item = $response->getContentAsModel(ProductVariantAttributeValueItem::class);

        return $item->getData();
    }

    /**
     * @param int $attributeValueId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $attributeValueId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['attributeValueId' => $attributeValueId]);
        $response = $this->performOperation(
            new DeleteProductVariantAttributeValue($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $attributeValueId
     * @param ProductVariantAttributeValue $status
     *
     * @return ProductVariantAttributeValueItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $attributeValueId, ProductVariantAttributeValue $status): ProductVariantAttributeValueItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['attributeValueId' => $attributeValueId]);
        $response = $this->performOperation(
            new ReplaceProductVariantAttributeValue(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductVariantAttributeValueItem::class);

        return $status->getData();
    }

    /**
     * @param int $attributeValueId
     * @param ProductVariantAttributeValue $status
     *
     * @return ProductVariantAttributeValue
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $attributeValueId, ProductVariantAttributeValue $status): ProductVariantAttributeValue
    {
        $pathParameters = array_merge($this->getPathParameters(), ['attributeValueId' => $attributeValueId]);
        $response = $this->performOperation(
            new UpdateProductVariantAttributeValue(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductVariantAttributeValueItem::class);

        return $status->getData();
    }
}

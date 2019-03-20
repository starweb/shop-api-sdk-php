<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductAttribute\ProductAttributeCollection;
use Starweb\Api\Model\ProductAttribute\ProductAttribute;
use Starweb\Api\Model\ProductAttribute\ProductAttributeItem;
use Starweb\Api\Model\ProductAttribute\ProductAttributeRequest;
use Starweb\Api\Operation\ProductAttribute\CreateProductAttribute;
use Starweb\Api\Operation\ProductAttribute\DeleteProductAttribute;
use Starweb\Api\Operation\ProductAttribute\ListProductAttributes;
use Starweb\Api\Operation\ProductAttribute\RetrieveProductAttribute;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductAttributeResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');

        return $resolver;
    }

    /**
     * @return ProductAttributeCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductAttributeCollection
    {
        $response = $this->performOperation(
            new ListProductAttributes($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductAttributeCollection::class);
    }

    /**
     * @param ProductAttributeRequest $item
     *
     * @return ProductAttribute
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductAttributeRequest $item): ProductAttribute
    {
        $response = $this->performOperation(
            new CreateProductAttribute(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductAttributeItem::class);

        return $item->getData();
    }

    /**
     * @param int $attributeId
     *
     * @return ProductAttribute
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $attributeId): ProductAttribute
    {
        $pathParameters = array_merge($this->getPathParameters(), ['attributeId' => $attributeId]);
        $response = $this->performOperation(
            new RetrieveProductAttribute($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductAttributeItem::class);

        return $item->getData();
    }

    /**
     * @param int $attributeId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $attributeId): ProductAttributeRequest
    {
        $pathParameters = array_merge($this->getPathParameters(), ['attributeId' => $attributeId]);
        $response = $this->performOperation(
            new DeleteProductAttribute($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }
}

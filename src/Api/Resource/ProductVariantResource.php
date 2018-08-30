<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductVariant\ProductVariantCollection;
use Starweb\Api\Model\ProductVariant\ProductVariant;
use Starweb\Api\Model\ProductVariant\ProductVariantItem;
use Starweb\Api\Operation\ProductVariant\CreateProductVariant;
use Starweb\Api\Operation\ProductVariant\DeleteProductVariant;
use Starweb\Api\Operation\ProductVariant\ListProductVariants;
use Starweb\Api\Operation\ProductVariant\ReplaceProductVariant;
use Starweb\Api\Operation\ProductVariant\RetrieveProductVariant;
use Starweb\Api\Operation\ProductVariant\UpdateProductVariant;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductVariantResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');

        return $resolver;
    }

    /**
     * @return ProductVariantCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(array $parameters = []): ProductVariantCollection
    {
        $response = $this->performOperation(
            new ListProductVariants($this, $parameters, $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductVariantCollection::class);
    }

    /**
     * @param ProductVariant $item
     *
     * @return ProductVariant
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductVariant $item): ProductVariant
    {
        $response = $this->performOperation(
            new CreateProductVariant(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(ProductVariantItem::class);

        return $item->getData();
    }

    /**
     * @param int $variantId
     *
     * @return ProductVariant
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $variantId, array $parameters = []): ProductVariant
    {
        $pathParameters = array_merge($this->getPathParameters(), ['variantId' => $variantId]);
        $response = $this->performOperation(
            new RetrieveProductVariant($this, $parameters, $pathParameters)
        );
        $item = $response->getContentAsModel(ProductVariantItem::class);

        return $item->getData();
    }

    /**
     * @param int $variantId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $variantId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['variantId' => $variantId]);
        $response = $this->performOperation(
            new DeleteProductVariant($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $variantId
     * @param ProductVariant $status
     *
     * @return ProductVariantItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $variantId, ProductVariant $status): ProductVariantItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['variantId' => $variantId]);
        $response = $this->performOperation(
            new ReplaceProductVariant(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductVariantItem::class);

        return $status->getData();
    }

    /**
     * @param int $variantId
     * @param ProductVariant $status
     *
     * @return ProductVariant
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $variantId, ProductVariant $status): ProductVariant
    {
        $pathParameters = array_merge($this->getPathParameters(), ['variantId' => $variantId]);
        $response = $this->performOperation(
            new UpdateProductVariant(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductVariantItem::class);

        return $status->getData();
    }
}

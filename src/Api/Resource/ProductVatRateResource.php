<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductVatRate\ProductVatRateCollection;
use Starweb\Api\Model\ProductVatRate\ProductVatRate;
use Starweb\Api\Model\ProductVatRate\ProductVatRateItem;
use Starweb\Api\Operation\ProductVatRate\CreateProductVatRate;
use Starweb\Api\Operation\ProductVatRate\DeleteProductVatRate;
use Starweb\Api\Operation\ProductVatRate\ListProductVatRates;
use Starweb\Api\Operation\ProductVatRate\ReplaceProductVatRate;
use Starweb\Api\Operation\ProductVatRate\RetrieveProductVatRate;
use Starweb\Api\Operation\ProductVatRate\UpdateProductVatRate;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductVatRateResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('productId');
        $resolver->setAllowedTypes('productId', 'int');

        return $resolver;
    }

    /**
     * @return ProductVatRateCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): ProductVatRateCollection
    {
        $response = $this->performOperation(
            new ListProductVatRates($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(ProductVatRateCollection::class);
    }

    /**
     * @param ProductVatRate $item
     *
     * @return ProductVatRate
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductVatRate $item): ProductVatRate
    {
        $response = $this->performOperation(
            new CreateProductVatRate(
                $this,
                $this->getSerializer()->normalize($item),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(ProductVatRateItem::class);

        return $item->getData();
    }

    /**
     * @param string $countryCode
     *
     * @return ProductVatRate
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $countryCode): ProductVatRate
    {
        $pathParameters = array_merge($this->getPathParameters(), ['countryCode' => $countryCode]);
        $response = $this->performOperation(
            new RetrieveProductVatRate($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(ProductVatRateItem::class);

        return $item->getData();
    }

    /**
     * @param string $countryCode
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(string $countryCode): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['countryCode' => $countryCode]);
        $response = $this->performOperation(
            new DeleteProductVatRate($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param string $countryCode
     * @param ProductVatRate $status
     *
     * @return ProductVatRateItem
     *
     * @throws \Http\Client\Exception
     */
    public function replace(string $countryCode, ProductVatRate $status): ProductVatRateItem
    {
        $pathParameters = array_merge($this->getPathParameters(), ['countryCode' => $countryCode]);
        $response = $this->performOperation(
            new ReplaceProductVatRate(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductVatRateItem::class);

        return $status->getData();
    }

    /**
     * @param string $countryCode
     * @param ProductVatRate $status
     *
     * @return ProductVatRate
     *
     * @throws \Http\Client\Exception
     */
    public function update(string $countryCode, ProductVatRate $status): ProductVatRate
    {
        $pathParameters = array_merge($this->getPathParameters(), ['countryCode' => $countryCode]);
        $response = $this->performOperation(
            new UpdateProductVatRate(
                $this,
                $this->getSerializer()->normalize($status),
                $pathParameters
            )
        );
        $status = $response->getContentAsModel(ProductVatRateItem::class);

        return $status->getData();
    }
}

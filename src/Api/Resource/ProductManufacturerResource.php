<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductManufacturer\ProductManufacturer;
use Starweb\Api\Model\ProductManufacturer\ProductManufacturerItem;
use Starweb\Api\Model\ProductManufacturer\ProductManufacturerCollection;
use Starweb\Api\Operation\ProductManufacturer\CreateProductManufacturer;
use Starweb\Api\Operation\ProductManufacturer\ListProductManufacturers;
use Starweb\Api\Operation\ProductManufacturer\ReplaceProductManufacturer;
use Starweb\Api\Operation\ProductManufacturer\RetrieveProductManufacturer;
use Starweb\Api\Operation\ProductManufacturer\UpdateProductManufacturer;

class ProductManufacturerResource extends Resource
{
    /**
     * @param array $parameters
     *
     * @return ProductManufacturerCollection
     */
    public function list(array $parameters = []): ProductManufacturerCollection
    {
        $response = $this->performOperation(new ListProductManufacturers($this, $parameters));

        return $response->getContentAsModel(ProductManufacturerCollection::class);
    }

    /**
     * @param ProductManufacturer $productManufacturer
     *
     * @return ProductManufacturer
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductManufacturer $productManufacturer): ProductManufacturer
    {
        $response = $this->performOperation(
            new CreateProductManufacturer(
                $this,
                $this->getSerializer()->normalize($productManufacturer),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(ProductManufacturerItem::class);

        return $item->getData();
    }

    /**
     * @param int $manufacturerId
     *
     * @return ProductManufacturer
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $manufacturerId): ProductManufacturer
    {
        $response = $this->performOperation(
            new RetrieveProductManufacturer($this, [], ['manufacturerId' => $manufacturerId])
        );
        $item = $response->getContentAsModel(ProductManufacturerItem::class);

        return $item->getData();
    }

    /**
     * @param int $manufacturerId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $manufacturerId): bool
    {
        $response = $this->performOperation(
            new DeleteProductManufacturer($this, [], ['manufacturerId' => $manufacturerId])
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $manufacturerId
     * @param ProductManufacturer $productManufacturer
     *
     * @return ProductManufacturer
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $manufacturerId, ProductManufacturer $productManufacturer): ProductManufacturer
    {
        $response = $this->performOperation(
            new ReplaceProductManufacturer(
                $this,
                $this->getSerializer()->normalize($productManufacturer),
                ['manufacturerId' => $manufacturerId]
            )
        );
        $item = $response->getContentAsModel(ProductManufacturerItem::class);

        return $item->getData();
    }

    /**
     * @param int $manufacturerId
     * @param ProductManufacturer $productManufacturer
     *
     * @return ProductManufacturer
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $manufacturerId, ProductManufacturer $productManufacturer): ProductManufacturer
    {
        $response = $this->performOperation(
            new UpdateProductManufacturer(
                $this,
                $this->getSerializer()->normalize($productManufacturer),
                ['manufacturerId' => $manufacturerId]
            )
        );
        $item = $response->getContentAsModel(ProductManufacturerItem::class);

        return $item->getData();
    }
}

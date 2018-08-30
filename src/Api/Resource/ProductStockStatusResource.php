<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\ProductStockStatus\ProductStockStatus;
use Starweb\Api\Model\ProductStockStatus\ProductStockStatusItem;
use Starweb\Api\Operation\ProductStockStatus\CreateProductStockStatus;
use Starweb\Api\Operation\ProductStockStatus\DeleteProductStockStatus;
use Starweb\Api\Model\ProductStockStatus\ProductStockStatusCollection;
use Starweb\Api\Operation\ProductStockStatus\ListProductStockStatuses;
use Starweb\Api\Operation\ProductStockStatus\ReplaceProductStockStatus;
use Starweb\Api\Operation\ProductStockStatus\RetrieveProductStockStatus;
use Starweb\Api\Operation\ProductStockStatus\UpdateProductStockStatus;

class ProductStockStatusResource extends Resource
{
    /**
     * @param array $parameters
     *
     * @return ProductStockStatusCollection
     */
    public function list(array $parameters = []): ProductStockStatusCollection
    {
        $response = $this->performOperation(new ListProductStockStatuses($this, $parameters));

        return $response->getContentAsModel(ProductStockStatusCollection::class);
    }

    /**
     * @param ProductStockStatus $productStockStatus
     *
     * @return ProductStockStatus
     *
     * @throws \Http\Client\Exception
     */
    public function create(ProductStockStatus $productStockStatus): ProductStockStatus
    {
        $response = $this->performOperation(
            new CreateProductStockStatus(
                $this,
                $this->getSerializer()->normalize($productStockStatus),
                $this->getPathParameters()
            )
        );
        $item = $response->getContentAsModel(ProductStockStatusItem::class);

        return $item->getData();
    }

    /**
     * @param int $stockStatusId
     *
     * @return ProductStockStatus
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $stockStatusId): ProductStockStatus
    {
        $response = $this->performOperation(
            new RetrieveProductStockStatus($this, [], ['stockStatusId' => $stockStatusId])
        );
        $item = $response->getContentAsModel(ProductStockStatusItem::class);

        return $item->getData();
    }

    /**
     * @param int $stockStatusId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $stockStatusId): bool
    {
        $response = $this->performOperation(
            new DeleteProductStockStatus($this, [], ['stockStatusId' => $stockStatusId])
        );

        return 204 === $response->getStatusCode();
    }

    /**
     * @param int $stockStatusId
     * @param ProductStockStatus $productStockStatus
     *
     * @return ProductStockStatus
     *
     * @throws \Http\Client\Exception
     */
    public function replace(int $stockStatusId, ProductStockStatus $productStockStatus): ProductStockStatus
    {
        $response = $this->performOperation(
            new ReplaceProductStockStatus(
                $this,
                $this->getSerializer()->normalize($productStockStatus),
                ['stockStatusId' => $stockStatusId]
            )
        );
        $item = $response->getContentAsModel(ProductStockStatusItem::class);

        return $item->getData();
    }

    /**
     * @param int $stockStatusId
     * @param ProductStockStatus $productStockStatus
     *
     * @return ProductStockStatus
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $stockStatusId, ProductStockStatus $productStockStatus): ProductStockStatus
    {
        $response = $this->performOperation(
            new UpdateProductStockStatus(
                $this,
                $this->getSerializer()->normalize($productStockStatus),
                ['stockStatusId' => $stockStatusId]
            )
        );
        $item = $response->getContentAsModel(ProductStockStatusItem::class);

        return $item->getData();
    }
}

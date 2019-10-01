<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockResponseModel
{
    /**
     * The stock location id status id. See  [stock locations](#tag/Stock-Locations)
     *
     * @var int
     */
    protected $stockLocationId;
    /**
     * The stock status id. See  [product stock statuses](#tag/Product-Stock-Statuses)
     *
     * @var int
     */
    protected $stockStatusId;
    /**
     * stock quantity
     *
     * @var float
     */
    protected $stockQuantity;
    /**
     * The stock location id status id. See  [stock locations](#tag/Stock-Locations)
     *
     * @return int
     */
    public function getStockLocationId() : int
    {
        return $this->stockLocationId;
    }
    /**
     * The stock location id status id. See  [stock locations](#tag/Stock-Locations)
     *
     * @param int $stockLocationId
     *
     * @return self
     */
    public function setStockLocationId(int $stockLocationId) : self
    {
        $this->stockLocationId = $stockLocationId;
        return $this;
    }
    /**
     * The stock status id. See  [product stock statuses](#tag/Product-Stock-Statuses)
     *
     * @return int
     */
    public function getStockStatusId() : int
    {
        return $this->stockStatusId;
    }
    /**
     * The stock status id. See  [product stock statuses](#tag/Product-Stock-Statuses)
     *
     * @param int $stockStatusId
     *
     * @return self
     */
    public function setStockStatusId(int $stockStatusId) : self
    {
        $this->stockStatusId = $stockStatusId;
        return $this;
    }
    /**
     * stock quantity
     *
     * @return float
     */
    public function getStockQuantity() : float
    {
        return $this->stockQuantity;
    }
    /**
     * stock quantity
     *
     * @param float $stockQuantity
     *
     * @return self
     */
    public function setStockQuantity(float $stockQuantity) : self
    {
        $this->stockQuantity = $stockQuantity;
        return $this;
    }
}
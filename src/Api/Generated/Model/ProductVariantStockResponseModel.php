<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockResponseModel
{
    /**
     * The stock location id status id. See  [stock locations](#tag/Stock-Locations)
     *
     * @var int|null
     */
    protected $stockLocationId;
    /**
     * The stock status id. See  [product stock statuses](#tag/Product-Stock-Statuses)
     *
     * @var int|null
     */
    protected $stockStatusId;
    /**
     * stock quantity
     *
     * @var float|null
     */
    protected $stockQuantity;
    /**
     * (Hyllplats or Shelf Space). The actual physical place at the stock location (warehouse).
     *
     * @var string|null
     */
    protected $shelfSpace;
    /**
     * The stock location id status id. See  [stock locations](#tag/Stock-Locations)
     *
     * @return int|null
     */
    public function getStockLocationId() : ?int
    {
        return $this->stockLocationId;
    }
    /**
     * The stock location id status id. See  [stock locations](#tag/Stock-Locations)
     *
     * @param int|null $stockLocationId
     *
     * @return self
     */
    public function setStockLocationId(?int $stockLocationId) : self
    {
        $this->stockLocationId = $stockLocationId;
        return $this;
    }
    /**
     * The stock status id. See  [product stock statuses](#tag/Product-Stock-Statuses)
     *
     * @return int|null
     */
    public function getStockStatusId() : ?int
    {
        return $this->stockStatusId;
    }
    /**
     * The stock status id. See  [product stock statuses](#tag/Product-Stock-Statuses)
     *
     * @param int|null $stockStatusId
     *
     * @return self
     */
    public function setStockStatusId(?int $stockStatusId) : self
    {
        $this->stockStatusId = $stockStatusId;
        return $this;
    }
    /**
     * stock quantity
     *
     * @return float|null
     */
    public function getStockQuantity() : ?float
    {
        return $this->stockQuantity;
    }
    /**
     * stock quantity
     *
     * @param float|null $stockQuantity
     *
     * @return self
     */
    public function setStockQuantity(?float $stockQuantity) : self
    {
        $this->stockQuantity = $stockQuantity;
        return $this;
    }
    /**
     * (Hyllplats or Shelf Space). The actual physical place at the stock location (warehouse).
     *
     * @return string|null
     */
    public function getShelfSpace() : ?string
    {
        return $this->shelfSpace;
    }
    /**
     * (Hyllplats or Shelf Space). The actual physical place at the stock location (warehouse).
     *
     * @param string|null $shelfSpace
     *
     * @return self
     */
    public function setShelfSpace(?string $shelfSpace) : self
    {
        $this->shelfSpace = $shelfSpace;
        return $this;
    }
}
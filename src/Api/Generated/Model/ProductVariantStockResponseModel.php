<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockResponseModel extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['stockLocationId'] = true;
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
        $this->initialized['stockStatusId'] = true;
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
        $this->initialized['stockQuantity'] = true;
        $this->stockQuantity = $stockQuantity;
        return $this;
    }
}
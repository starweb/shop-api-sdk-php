<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockPutRequestModel extends \ArrayObject
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
        $this->initialized['stockStatusId'] = true;
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
        $this->initialized['stockQuantity'] = true;
        $this->stockQuantity = $stockQuantity;
        return $this;
    }
}
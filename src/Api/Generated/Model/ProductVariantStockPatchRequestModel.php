<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockPatchRequestModel extends \ArrayObject
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
     * The stock status id. If you do not provide this value, the stock status will be changed according to the status settings, otherwise the status will be overriden by the new value, no further status actions will be applied. See  [product stock statuses](#tag/Product-Stock-Statuses)
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
     * The stock status id. If you do not provide this value, the stock status will be changed according to the status settings, otherwise the status will be overriden by the new value, no further status actions will be applied. See  [product stock statuses](#tag/Product-Stock-Statuses)
     *
     * @return int|null
     */
    public function getStockStatusId() : ?int
    {
        return $this->stockStatusId;
    }
    /**
     * The stock status id. If you do not provide this value, the stock status will be changed according to the status settings, otherwise the status will be overriden by the new value, no further status actions will be applied. See  [product stock statuses](#tag/Product-Stock-Statuses)
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
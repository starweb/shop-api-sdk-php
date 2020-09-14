<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockPutRequestModel
{
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
}
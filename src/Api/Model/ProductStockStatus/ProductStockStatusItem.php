<?php

namespace Starweb\Api\Model\ProductStockStatus;

class ProductStockStatusItem
{
    /**
     * 
     *
     * @var ProductStockStatus
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatus
     */
    public function getData() : ?ProductStockStatus
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusModel $data
     *
     * @return self
     */
    public function setData(?ProductStockStatusModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
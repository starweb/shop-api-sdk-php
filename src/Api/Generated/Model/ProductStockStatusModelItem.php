<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusModelItem
{
    /**
     * 
     *
     * @var ProductStockStatusResponseModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatusResponseModel
     */
    public function getData() : ProductStockStatusResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusResponseModel $data
     *
     * @return self
     */
    public function setData(ProductStockStatusResponseModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
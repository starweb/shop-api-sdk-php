<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusModelItem
{
    /**
     * 
     *
     * @var ProductStockStatusResponseModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatusResponseModel|null
     */
    public function getData() : ?ProductStockStatusResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusResponseModel|null $data
     *
     * @return self
     */
    public function setData(?ProductStockStatusResponseModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
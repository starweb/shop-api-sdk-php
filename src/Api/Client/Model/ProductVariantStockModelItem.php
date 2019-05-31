<?php

namespace Starweb\Api\Client\Model;

class ProductVariantStockModelItem
{
    /**
     * 
     *
     * @var ProductVariantStockResponseModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantStockResponseModel
     */
    public function getData() : ?ProductVariantStockResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantStockResponseModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantStockResponseModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
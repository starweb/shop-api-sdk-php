<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantStockModelItem
{
    /**
     * 
     *
     * @var ProductVariantStockResponseModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantStockResponseModel|null
     */
    public function getData() : ?ProductVariantStockResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantStockResponseModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVariantStockResponseModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
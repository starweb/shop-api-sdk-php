<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantModelItem
{
    /**
     * 
     *
     * @var ProductVariantResponseModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantResponseModel
     */
    public function getData() : ProductVariantResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantResponseModel $data
     *
     * @return self
     */
    public function setData(ProductVariantResponseModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
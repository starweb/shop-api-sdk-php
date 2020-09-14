<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantModelItem
{
    /**
     * 
     *
     * @var ProductVariantResponseModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantResponseModel|null
     */
    public function getData() : ?ProductVariantResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantResponseModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVariantResponseModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
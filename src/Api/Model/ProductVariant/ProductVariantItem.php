<?php

namespace Starweb\Api\Model\ProductVariant;

class ProductVariantItem
{
    /**
     * 
     *
     * @var ProductVariant
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariant
     */
    public function getData() : ?ProductVariant
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantPriceModelItem
{
    /**
     * 
     *
     * @var ProductVariantPriceModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantPriceModel|null
     */
    public function getData() : ?ProductVariantPriceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantPriceModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVariantPriceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Model\ProductVariantPrice;

class ProductVariantPriceItem
{
    /**
     *
     *
     * @var ProductVariantPrice
     */
    protected $data;
    /**
     *
     *
     * @return ProductVariantPrice
     */
    public function getData() : ?ProductVariantPrice
    {
        return $this->data;
    }
    /**
     *
     *
     * @param ProductVariantPrice $data
     *
     * @return self
     */
    public function setData(ProductVariantPrice $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

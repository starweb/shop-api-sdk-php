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
     * @param ProductVariantPriceModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantPriceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

<?php

namespace Starweb\Api\Model\ProductVariantPricelistPrice;

class ProductVariantPricelistPriceItem
{
    /**
     *
     *
     * @var ProductVariantPricelistPrice
     */
    protected $data;
    /**
     *
     *
     * @return ProductVariantPricelistPrice
     */
    public function getData() : ?ProductVariantPricelistPrice
    {
        return $this->data;
    }
    /**
     *
     *
     * @param ProductVariantPricelistPrice $data
     *
     * @return self
     */
    public function setData(ProductVariantPricelistPrice $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

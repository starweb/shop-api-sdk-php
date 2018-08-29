<?php

namespace Starweb\Api\Model\ProductVariantPrice;

class ProductVariantPriceCollection
{
    /**
     * A collection of product variants
     *
     * @var ProductVariantPrice[]
     */
    protected $data;
    /**
     * A collection of product variants
     *
     * @return ProductVariantPrice[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product variants
     *
     * @param ProductVariantPrice[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
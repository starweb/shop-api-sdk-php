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
     * @param ProductVariant $data
     *
     * @return self
     */
    public function setData(?ProductVariant $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

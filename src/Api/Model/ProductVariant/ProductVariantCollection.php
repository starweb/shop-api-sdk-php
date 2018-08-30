<?php

namespace Starweb\Api\Model\ProductVariant;

class ProductVariantCollection
{
    /**
     * A collection of product variants
     *
     * @var ProductVariant[]
     */
    protected $data;
    /**
     * A collection of product variants
     *
     * @return ProductVariant[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product variants
     *
     * @param ProductVariant[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

<?php

namespace Starweb\Api\Model\ProductVariantAttributeValue;

class ProductVariantAttributeValueItem
{
    /**
     * @var ProductVariantAttributeValue
     */
    protected $data;

    /**
     * @return ProductVariantAttributeValue
     */
    public function getData() : ?ProductVariantAttributeValue
    {
        return $this->data;
    }

    /**
     * @param ProductVariantAttributeValue $data
     *
     * @return self
     */
    public function setData(ProductVariantAttributeValue $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

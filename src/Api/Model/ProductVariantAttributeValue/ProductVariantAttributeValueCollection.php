<?php

namespace Starweb\Api\Model\ProductVariantAttributeValue;

class ProductVariantAttributeValueCollection
{
    /**
     * A collection of attribute values
     *
     * @var ProductVariantAttributeValue[]
     */
    protected $data;
    /**
     * A collection of attribute values
     *
     * @return ProductVariantAttributeValue[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of attribute values
     *
     * @param ProductVariantAttributeValue[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

<?php

namespace Starweb\Api\Model\ProductVariantAttribute;

class ProductVariantAttributeCollection
{
    /**
     * A collection of attribute values
     *
     * @var ProductVariantAttribute[]
     */
    protected $data;

    /**
     * A collection of attribute values
     *
     * @return ProductVariantAttribute[]
     */
    public function getData() : array
    {
        return $this->data;
    }

    /**
     * A collection of attribute values
     *
     * @param ProductVariantAttribute[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

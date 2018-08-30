<?php

namespace Starweb\Api\Model\ProductVariantAttribute;

class ProductVariantAttributeItem
{
    /**
     *
     *
     * @var ProductVariantAttribute
     */
    protected $data;
    /**
     *
     *
     * @return ProductVariantAttribute
     */
    public function getData() : ?ProductVariantAttribute
    {
        return $this->data;
    }
    /**
     *
     *
     * @param ProductVariantAttributeModel $data
     *
     * @return self
     */
    public function setData(?ProductVariantAttributeModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

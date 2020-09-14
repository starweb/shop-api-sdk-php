<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelItem
{
    /**
     * 
     *
     * @var ProductVariantAttributeValueModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeValueModel|null
     */
    public function getData() : ?ProductVariantAttributeValueModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeValueModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVariantAttributeValueModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
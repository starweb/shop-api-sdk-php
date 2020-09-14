<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModelItem
{
    /**
     * 
     *
     * @var ProductVariantAttributeModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeModel|null
     */
    public function getData() : ?ProductVariantAttributeModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVariantAttributeModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
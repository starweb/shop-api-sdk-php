<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelLanguages
{
    /**
     * 
     *
     * @var ProductVariantAttributeValueLanguageModel[]
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeValueLanguageModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeValueLanguageModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelLanguages
{
    /**
     * 
     *
     * @var ProductVariantAttributeValueLanguageModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeValueLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeValueLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModelLanguages
{
    /**
     * 
     *
     * @var ProductVariantAttributeLanguageModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeLanguageModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeLanguageModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
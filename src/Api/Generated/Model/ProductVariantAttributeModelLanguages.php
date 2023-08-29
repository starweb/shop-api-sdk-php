<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModelLanguages extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var ProductVariantAttributeLanguageModel[]
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantAttributeLanguageModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantAttributeLanguageModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
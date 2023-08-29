<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelLanguages extends \ArrayObject
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
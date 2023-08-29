<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueModelItem extends \ArrayObject
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
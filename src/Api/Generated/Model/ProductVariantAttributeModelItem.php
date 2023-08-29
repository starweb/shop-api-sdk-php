<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeModelItem extends \ArrayObject
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
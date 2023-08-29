<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantModelItem extends \ArrayObject
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
     * @var ProductVariantModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantModel
     */
    public function getData() : ProductVariantModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantModel $data
     *
     * @return self
     */
    public function setData(ProductVariantModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
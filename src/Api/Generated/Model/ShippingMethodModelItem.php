<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodModelItem extends \ArrayObject
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
     * @var ShippingMethodModel
     */
    protected $data;
    /**
     * 
     *
     * @return ShippingMethodModel
     */
    public function getData() : ShippingMethodModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ShippingMethodModel $data
     *
     * @return self
     */
    public function setData(ShippingMethodModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
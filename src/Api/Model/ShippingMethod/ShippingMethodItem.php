<?php

 Starweb\Api\Model\ShippingMethod;

class ShippingMethodItem
{
    /**
     * 
     *
     * @var ShippingMethod
     */
    protected $data;
    /**
     * 
     *
     * @return ShippingMethod
     */
    public function getData() : ?ShippingMethod
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
    public function setData(?ShippingMethodModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
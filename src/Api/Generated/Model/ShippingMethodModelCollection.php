<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodModelCollection extends \ArrayObject
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
     * A collection of shipping methods
     *
     * @var ShippingMethodModel[]
     */
    protected $data;
    /**
     * A collection of shipping methods
     *
     * @return ShippingMethodModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of shipping methods
     *
     * @param ShippingMethodModel[] $data
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
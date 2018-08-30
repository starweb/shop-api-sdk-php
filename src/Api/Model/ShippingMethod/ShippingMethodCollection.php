<?php

 Starweb\Api\Model\ShippingMethod;

class ShippingMethodCollection
{
    /**
     * A collection of shipping methods
     *
     * @var ShippingMethod[]
     */
    protected $data;
    /**
     * A collection of shipping methods
     *
     * @return ShippingMethod[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of shipping methods
     *
     * @param ShippingMethod[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

<?php

 Starweb\Api\Model\ShippingTrackingType;

class ShippingTrackingTypeCollection
{
    /**
     * A list of shipping tracking types
     *
     * @var ShippingTrackingType[]
     */
    protected $data;
    /**
     * A list of shipping tracking types
     *
     * @return ShippingTrackingType[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of shipping tracking types
     *
     * @param ShippingTrackingType[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

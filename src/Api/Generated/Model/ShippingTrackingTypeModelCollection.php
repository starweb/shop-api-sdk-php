<?php

namespace Starweb\Api\Generated\Model;

class ShippingTrackingTypeModelCollection extends \ArrayObject
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
     * A list of shipping tracking types
     *
     * @var ShippingTrackingTypeModel[]|null
     */
    protected $data;
    /**
     * A list of shipping tracking types
     *
     * @return ShippingTrackingTypeModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of shipping tracking types
     *
     * @param ShippingTrackingTypeModel[]|null $data
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
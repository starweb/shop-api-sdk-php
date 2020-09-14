<?php

namespace Starweb\Api\Generated\Model;

class ShippingTrackingTypeModelCollection
{
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
        $this->data = $data;
        return $this;
    }
}
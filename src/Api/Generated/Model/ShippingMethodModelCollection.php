<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodModelCollection
{
    /**
     * A collection of shipping methods
     *
     * @var ShippingMethodModel[]|null
     */
    protected $data;
    /**
     * A collection of shipping methods
     *
     * @return ShippingMethodModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of shipping methods
     *
     * @param ShippingMethodModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
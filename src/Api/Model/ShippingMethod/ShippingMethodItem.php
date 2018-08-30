<?php

namespace Starweb\Api\Model\ShippingMethod;

class ShippingMethodItem
{
    /**
     * @var ShippingMethod
     */
    protected $data;

    /**
     * @return ShippingMethod
     */
    public function getData(): ?ShippingMethod
    {
        return $this->data;
    }

    /**
     * @param ShippingMethod $data
     *
     * @return self
     */
    public function setData(ShippingMethod $data): self
    {
        $this->data = $data;

        return $this;
    }
}

<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodModelItem
{
    /**
     * 
     *
     * @var ShippingMethodModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ShippingMethodModel|null
     */
    public function getData() : ?ShippingMethodModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ShippingMethodModel|null $data
     *
     * @return self
     */
    public function setData(?ShippingMethodModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Model\OrderAddress;

class OrderAddressCollection
{
    /**
     * @var OrderAddress
     */
    protected $data;

    /**
     * @return OrderAddress
     */
    public function getData() : ?OrderAddress
    {
        return $this->data;
    }

    /**
     * @param OrderAddress $data
     *
     * @return self
     */
    public function setData(OrderAddress $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
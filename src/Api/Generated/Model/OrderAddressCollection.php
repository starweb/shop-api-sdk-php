<?php

namespace Starweb\Api\Generated\Model;

class OrderAddressCollection
{
    /**
     * 
     *
     * @var OrderAddressCollectionData
     */
    protected $data;
    /**
     * 
     *
     * @return OrderAddressCollectionData
     */
    public function getData() : OrderAddressCollectionData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderAddressCollectionData $data
     *
     * @return self
     */
    public function setData(OrderAddressCollectionData $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
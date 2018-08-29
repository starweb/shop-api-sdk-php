<?php

namespace Starweb\Api\Model\CustomerAddress;

class CustomerAddressesCollection
{
    /**
     * 
     *
     * @var CustomerAddressesCollectionData
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddressesCollectionData
     */
    public function getData() : ?CustomerAddressesCollectionData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerAddressesModelCollectionData $data
     *
     * @return self
     */
    public function setData(?CustomerAddressesModelCollectionData $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
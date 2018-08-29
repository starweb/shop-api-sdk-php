<?php

namespace Starweb\Api\Model\CustomerAddress;

class CustomerAddressCollection
{
    /**
     * 
     *
     * @var CustomerAddressCollectionData
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddressCollectionData
     */
    public function getData() : ?CustomerAddressCollectionData
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
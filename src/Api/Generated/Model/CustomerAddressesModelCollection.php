<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddressesModelCollection
{
    /**
     * 
     *
     * @var CustomerAddressesModelCollectionData
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddressesModelCollectionData
     */
    public function getData() : ?CustomerAddressesModelCollectionData
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
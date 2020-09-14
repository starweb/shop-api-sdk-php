<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddressesModelCollection
{
    /**
     * 
     *
     * @var CustomerAddressesModelCollectionData|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddressesModelCollectionData|null
     */
    public function getData() : ?CustomerAddressesModelCollectionData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerAddressesModelCollectionData|null $data
     *
     * @return self
     */
    public function setData(?CustomerAddressesModelCollectionData $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
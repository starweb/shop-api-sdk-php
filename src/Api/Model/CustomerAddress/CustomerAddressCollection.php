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
     * @param CustomerAddressesCollectionData $data
     *
     * @return self
     */
    public function setData(?CustomerAddressesCollectionData $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

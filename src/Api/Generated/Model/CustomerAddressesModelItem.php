<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddressesModelItem
{
    /**
     * 
     *
     * @var AddressModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return AddressModel|null
     */
    public function getData() : ?AddressModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param AddressModel|null $data
     *
     * @return self
     */
    public function setData(?AddressModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
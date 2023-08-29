<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddressesModelCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getData() : CustomerAddressesModelCollectionData
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
    public function setData(CustomerAddressesModelCollectionData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
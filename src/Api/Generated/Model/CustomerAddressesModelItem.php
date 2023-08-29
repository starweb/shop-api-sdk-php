<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddressesModelItem extends \ArrayObject
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
     * @var AddressModel
     */
    protected $data;
    /**
     * 
     *
     * @return AddressModel
     */
    public function getData() : AddressModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param AddressModel $data
     *
     * @return self
     */
    public function setData(AddressModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
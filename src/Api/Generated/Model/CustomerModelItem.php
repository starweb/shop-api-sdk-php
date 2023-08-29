<?php

namespace Starweb\Api\Generated\Model;

class CustomerModelItem extends \ArrayObject
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
     * @var CustomerModel
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerModel
     */
    public function getData() : CustomerModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerModel $data
     *
     * @return self
     */
    public function setData(CustomerModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
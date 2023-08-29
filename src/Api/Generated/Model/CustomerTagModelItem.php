<?php

namespace Starweb\Api\Generated\Model;

class CustomerTagModelItem extends \ArrayObject
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
     * @var CustomerTagModel
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerTagModel
     */
    public function getData() : CustomerTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerTagModel $data
     *
     * @return self
     */
    public function setData(CustomerTagModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
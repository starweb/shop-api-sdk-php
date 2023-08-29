<?php

namespace Starweb\Api\Generated\Model;

class CustomerCreatedModelItem extends \ArrayObject
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
     * @var CustomerCreatedModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerCreatedModel|null
     */
    public function getData() : ?CustomerCreatedModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerCreatedModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerCreatedModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
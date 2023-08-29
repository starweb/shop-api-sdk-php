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
     * @var CustomerTagModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerTagModel|null
     */
    public function getData() : ?CustomerTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerTagModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerTagModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddedTagModelItem extends \ArrayObject
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
     * @var CustomerAddedTagModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddedTagModel|null
     */
    public function getData() : ?CustomerAddedTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerAddedTagModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerAddedTagModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
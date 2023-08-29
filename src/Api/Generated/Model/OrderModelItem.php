<?php

namespace Starweb\Api\Generated\Model;

class OrderModelItem extends \ArrayObject
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
     * @var OrderModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderModel|null
     */
    public function getData() : ?OrderModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderModel|null $data
     *
     * @return self
     */
    public function setData(?OrderModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
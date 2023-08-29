<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusModelItem extends \ArrayObject
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
     * @var OrderStatusModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderStatusModel|null
     */
    public function getData() : ?OrderStatusModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderStatusModel|null $data
     *
     * @return self
     */
    public function setData(?OrderStatusModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
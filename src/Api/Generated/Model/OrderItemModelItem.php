<?php

namespace Starweb\Api\Generated\Model;

class OrderItemModelItem extends \ArrayObject
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
     * @var OrderItemModel
     */
    protected $data;
    /**
     * 
     *
     * @return OrderItemModel
     */
    public function getData() : OrderItemModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderItemModel $data
     *
     * @return self
     */
    public function setData(OrderItemModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
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
     * @var OrderItemModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderItemModel|null
     */
    public function getData() : ?OrderItemModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderItemModel|null $data
     *
     * @return self
     */
    public function setData(?OrderItemModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
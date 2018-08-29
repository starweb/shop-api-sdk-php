<?php

namespace Starweb\Api\Model\OrderItem;

class OrderItem
{
    /**
     * 
     *
     * @var Order
     */
    protected $data;
    /**
     * 
     *
     * @return Order
     */
    public function getData() : ?Order
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderModel $data
     *
     * @return self
     */
    public function setData(?OrderModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Model\OrderStatus;

class OrderStatusItem
{
    /**
     * 
     *
     * @var OrderStatus
     */
    protected $data;
    /**
     * 
     *
     * @return OrderStatus
     */
    public function getData() : ?OrderStatus
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderStatusModel $data
     *
     * @return self
     */
    public function setData(?OrderStatusModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
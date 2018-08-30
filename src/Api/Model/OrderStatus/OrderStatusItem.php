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
     * @param OrderStatus $data
     *
     * @return self
     */
    public function setData(?OrderStatus $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

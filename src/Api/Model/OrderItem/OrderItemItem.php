<?php

namespace Starweb\Api\Model\OrderItem;

class OrderItemItem
{
    /**
     *
     *
     * @var OrderItem
     */
    protected $data;
    /**
     *
     *
     * @return OrderItem
     */
    public function getData() : ?OrderItem
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
    public function setData(?OrderItemModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

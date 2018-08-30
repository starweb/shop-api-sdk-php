<?php

namespace Starweb\Api\Model\OrderStatus;

class OrderStatusCollection
{
    /**
     * A list of order statuses
     *
     * @var OrderStatus[]
     */
    protected $data;
    /**
     * A list of order statuses
     *
     * @return OrderStatus[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order statuses
     *
     * @param OrderStatus[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

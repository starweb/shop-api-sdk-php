<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusModelCollection
{
    /**
     * A list of order statuses
     *
     * @var OrderStatusModel[]|null
     */
    protected $data;
    /**
     * A list of order statuses
     *
     * @return OrderStatusModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order statuses
     *
     * @param OrderStatusModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
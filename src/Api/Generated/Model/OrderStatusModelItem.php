<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusModelItem
{
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
        $this->data = $data;
        return $this;
    }
}
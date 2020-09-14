<?php

namespace Starweb\Api\Generated\Model;

class OrderItemModelItem
{
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
        $this->data = $data;
        return $this;
    }
}
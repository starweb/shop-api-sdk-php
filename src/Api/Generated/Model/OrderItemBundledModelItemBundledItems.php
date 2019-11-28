<?php

namespace Starweb\Api\Generated\Model;

class OrderItemBundledModelItemBundledItems
{
    /**
     * 
     *
     * @var OrderItemModel[]
     */
    protected $data;
    /**
     * 
     *
     * @return OrderItemModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderItemModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
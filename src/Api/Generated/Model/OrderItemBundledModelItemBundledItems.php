<?php

namespace Starweb\Api\Generated\Model;

class OrderItemBundledModelItemBundledItems
{
    /**
     * 
     *
     * @var OrderItemModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderItemModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderItemModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
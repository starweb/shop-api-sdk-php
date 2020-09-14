<?php

namespace Starweb\Api\Generated\Model;

class OrderItemModelCollection
{
    /**
     * A list of order items
     *
     * @var OrderItemModelCollectionDataItem[]|null
     */
    protected $data;
    /**
     * A list of order items
     *
     * @return OrderItemModelCollectionDataItem[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order items
     *
     * @param OrderItemModelCollectionDataItem[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
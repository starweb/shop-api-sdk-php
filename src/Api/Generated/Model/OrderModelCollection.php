<?php

namespace Starweb\Api\Generated\Model;

class OrderModelCollection
{
    /**
     * A list of orders
     *
     * @var OrderModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var OrderModelCollectionMeta|null
     */
    protected $meta;
    /**
     * A list of orders
     *
     * @return OrderModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of orders
     *
     * @param OrderModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return OrderModelCollectionMeta|null
     */
    public function getMeta() : ?OrderModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param OrderModelCollectionMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?OrderModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
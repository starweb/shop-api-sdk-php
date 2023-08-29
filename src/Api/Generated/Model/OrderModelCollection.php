<?php

namespace Starweb\Api\Generated\Model;

class OrderModelCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['data'] = true;
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
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
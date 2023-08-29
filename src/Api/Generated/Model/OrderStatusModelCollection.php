<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusModelCollection extends \ArrayObject
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
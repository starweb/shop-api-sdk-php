<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusModelCollection extends \ArrayObject
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
     * A list of product stock statuses
     *
     * @var ProductStockStatusModel[]
     */
    protected $data;
    /**
     * A list of product stock statuses
     *
     * @return ProductStockStatusModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of product stock statuses
     *
     * @param ProductStockStatusModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
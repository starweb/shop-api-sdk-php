<?php

namespace Starweb\Api\Generated\Model;

class ProductStockStatusModelItem extends \ArrayObject
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
     * 
     *
     * @var ProductStockStatusModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatusModel
     */
    public function getData() : ProductStockStatusModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusModel $data
     *
     * @return self
     */
    public function setData(ProductStockStatusModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
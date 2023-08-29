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
     * @var ProductStockStatusResponseModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductStockStatusResponseModel|null
     */
    public function getData() : ?ProductStockStatusResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductStockStatusResponseModel|null $data
     *
     * @return self
     */
    public function setData(?ProductStockStatusResponseModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
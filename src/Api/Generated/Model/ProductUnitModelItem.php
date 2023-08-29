<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitModelItem extends \ArrayObject
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
     * @var ProductUnitModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductUnitModel
     */
    public function getData() : ProductUnitModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductUnitModel $data
     *
     * @return self
     */
    public function setData(ProductUnitModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
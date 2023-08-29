<?php

namespace Starweb\Api\Generated\Model;

class ProductManufacturerModelItem extends \ArrayObject
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
     * @var ProductManufacturerModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductManufacturerModel|null
     */
    public function getData() : ?ProductManufacturerModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductManufacturerModel|null $data
     *
     * @return self
     */
    public function setData(?ProductManufacturerModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
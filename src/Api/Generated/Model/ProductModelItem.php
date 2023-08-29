<?php

namespace Starweb\Api\Generated\Model;

class ProductModelItem extends \ArrayObject
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
     * @var ProductModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductModel
     */
    public function getData() : ProductModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductModel $data
     *
     * @return self
     */
    public function setData(ProductModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
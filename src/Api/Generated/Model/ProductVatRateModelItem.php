<?php

namespace Starweb\Api\Generated\Model;

class ProductVatRateModelItem extends \ArrayObject
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
     * @var ProductVatRateModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVatRateModel
     */
    public function getData() : ProductVatRateModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVatRateModel $data
     *
     * @return self
     */
    public function setData(ProductVatRateModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
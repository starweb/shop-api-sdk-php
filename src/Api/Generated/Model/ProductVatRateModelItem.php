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
     * @var ProductVatRateModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVatRateModel|null
     */
    public function getData() : ?ProductVatRateModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVatRateModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVatRateModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
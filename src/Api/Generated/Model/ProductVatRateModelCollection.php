<?php

namespace Starweb\Api\Generated\Model;

class ProductVatRateModelCollection extends \ArrayObject
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
     * A collection of product vat rates
     *
     * @var ProductVatRateModel[]
     */
    protected $data;
    /**
     * A collection of product vat rates
     *
     * @return ProductVatRateModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product vat rates
     *
     * @param ProductVatRateModel[] $data
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
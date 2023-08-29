<?php

namespace Starweb\Api\Generated\Model;

class VatRateModelCollection extends \ArrayObject
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
     * A collection of country vat rates
     *
     * @var VatRateModel[]
     */
    protected $data;
    /**
     * A collection of country vat rates
     *
     * @return VatRateModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of country vat rates
     *
     * @param VatRateModel[] $data
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
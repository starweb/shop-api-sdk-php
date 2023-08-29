<?php

namespace Starweb\Api\Generated\Model;

class VatRateModelItem extends \ArrayObject
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
     * @var VatRateModel
     */
    protected $data;
    /**
     * 
     *
     * @return VatRateModel
     */
    public function getData() : VatRateModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param VatRateModel $data
     *
     * @return self
     */
    public function setData(VatRateModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
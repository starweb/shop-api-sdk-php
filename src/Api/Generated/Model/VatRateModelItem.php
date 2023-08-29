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
     * @var VatRateModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return VatRateModel|null
     */
    public function getData() : ?VatRateModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param VatRateModel|null $data
     *
     * @return self
     */
    public function setData(?VatRateModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
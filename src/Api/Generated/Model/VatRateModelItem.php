<?php

namespace Starweb\Api\Generated\Model;

class VatRateModelItem
{
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
    public function getData() : ?VatRateModel
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
    public function setData(?VatRateModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
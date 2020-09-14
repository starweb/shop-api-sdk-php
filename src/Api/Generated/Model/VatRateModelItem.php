<?php

namespace Starweb\Api\Generated\Model;

class VatRateModelItem
{
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
        $this->data = $data;
        return $this;
    }
}
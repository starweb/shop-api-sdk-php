<?php

namespace Starweb\Api\Generated\Model;

class ProductVatRateModelItem
{
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
        $this->data = $data;
        return $this;
    }
}
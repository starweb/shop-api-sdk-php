<?php

namespace Starweb\Api\Model\ProductVatRate;

class ProductVatRateItem
{
    /**
     * 
     *
     * @var ProductVatRate
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVatRate
     */
    public function getData() : ?ProductVatRate
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
    public function setData(?ProductVatRateModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
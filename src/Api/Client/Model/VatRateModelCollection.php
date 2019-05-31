<?php

namespace Starweb\Api\Client\Model;

class VatRateModelCollection
{
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
    public function getData() : ?array
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
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
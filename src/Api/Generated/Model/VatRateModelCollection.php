<?php

namespace Starweb\Api\Generated\Model;

class VatRateModelCollection
{
    /**
     * A collection of country vat rates
     *
     * @var VatRateModel[]|null
     */
    protected $data;
    /**
     * A collection of country vat rates
     *
     * @return VatRateModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of country vat rates
     *
     * @param VatRateModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class ProductVatRateModelCollection
{
    /**
     * A collection of product vat rates
     *
     * @var ProductVatRateModel[]|null
     */
    protected $data;
    /**
     * A collection of product vat rates
     *
     * @return ProductVatRateModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product vat rates
     *
     * @param ProductVatRateModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
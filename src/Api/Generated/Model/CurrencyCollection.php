<?php

namespace Starweb\Api\Generated\Model;

class CurrencyCollection
{
    /**
     * A collection of currencies
     *
     * @var CurrencyModel[]|null
     */
    protected $data;
    /**
     * A collection of currencies
     *
     * @return CurrencyModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of currencies
     *
     * @param CurrencyModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
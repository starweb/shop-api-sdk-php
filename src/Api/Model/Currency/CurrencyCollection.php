<?php

namespace Starweb\Api\Model\Currency;

class CurrencyCollection
{
    /**
     * A collection of currencies
     *
     * @var Currency[]
     */
    protected $data;
    /**
     * A collection of currencies
     *
     * @return Currency[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of currencies
     *
     * @param Currency[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

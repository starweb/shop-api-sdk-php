<?php

namespace Starweb\Api\Model\Currency;

class CurrencyItem
{
    /**
     *
     *
     * @var Currency
     */
    protected $data;
    /**
     *
     *
     * @return Currency
     */
    public function getData() : ?Currency
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Currency $data
     *
     * @return self
     */
    public function setData(?Currency $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

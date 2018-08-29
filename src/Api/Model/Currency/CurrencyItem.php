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
     * @param CurrencyModel $data
     *
     * @return self
     */
    public function setData(?CurrencyModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class CurrencyModelItem
{
    /**
     * 
     *
     * @var CurrencyModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CurrencyModel|null
     */
    public function getData() : ?CurrencyModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CurrencyModel|null $data
     *
     * @return self
     */
    public function setData(?CurrencyModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
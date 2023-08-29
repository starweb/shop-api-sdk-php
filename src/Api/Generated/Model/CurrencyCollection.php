<?php

namespace Starweb\Api\Generated\Model;

class CurrencyCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
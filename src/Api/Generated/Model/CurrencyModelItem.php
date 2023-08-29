<?php

namespace Starweb\Api\Generated\Model;

class CurrencyModelItem extends \ArrayObject
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
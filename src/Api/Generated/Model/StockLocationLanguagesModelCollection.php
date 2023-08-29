<?php

namespace Starweb\Api\Generated\Model;

class StockLocationLanguagesModelCollection extends \ArrayObject
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
     * A collection of category languages
     *
     * @var StockLocationLanguagesModel[]
     */
    protected $data;
    /**
     * A collection of category languages
     *
     * @return StockLocationLanguagesModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of category languages
     *
     * @param StockLocationLanguagesModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
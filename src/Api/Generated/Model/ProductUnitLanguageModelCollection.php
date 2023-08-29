<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitLanguageModelCollection extends \ArrayObject
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
     * A collection of product unit languages
     *
     * @var ProductUnitLanguageModel[]
     */
    protected $data;
    /**
     * A collection of product unit languages
     *
     * @return ProductUnitLanguageModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product unit languages
     *
     * @param ProductUnitLanguageModel[] $data
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
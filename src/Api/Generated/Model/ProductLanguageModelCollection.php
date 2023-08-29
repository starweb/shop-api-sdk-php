<?php

namespace Starweb\Api\Generated\Model;

class ProductLanguageModelCollection extends \ArrayObject
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
     * A collection of product languages
     *
     * @var ProductLanguageModel[]
     */
    protected $data;
    /**
     * A collection of product languages
     *
     * @return ProductLanguageModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product languages
     *
     * @param ProductLanguageModel[] $data
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
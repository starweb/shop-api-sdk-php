<?php

namespace Starweb\Api\Generated\Model;

class ProductModelLanguages extends \ArrayObject
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
     * @var ProductLanguageSlimModel[]
     */
    protected $data;
    /**
     * A collection of product languages
     *
     * @return ProductLanguageSlimModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product languages
     *
     * @param ProductLanguageSlimModel[] $data
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
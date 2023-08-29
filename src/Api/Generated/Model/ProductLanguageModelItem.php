<?php

namespace Starweb\Api\Generated\Model;

class ProductLanguageModelItem extends \ArrayObject
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
     * @var ProductLanguageModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductLanguageModel|null
     */
    public function getData() : ?ProductLanguageModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductLanguageModel|null $data
     *
     * @return self
     */
    public function setData(?ProductLanguageModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
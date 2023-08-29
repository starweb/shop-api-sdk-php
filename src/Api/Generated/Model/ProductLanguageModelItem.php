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
     * @var ProductLanguageModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductLanguageModel
     */
    public function getData() : ProductLanguageModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductLanguageModel $data
     *
     * @return self
     */
    public function setData(ProductLanguageModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
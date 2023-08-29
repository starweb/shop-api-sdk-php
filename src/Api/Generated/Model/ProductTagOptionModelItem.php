<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionModelItem extends \ArrayObject
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
     * @var ProductTagOptionModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagOptionModel|null
     */
    public function getData() : ?ProductTagOptionModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagOptionModel|null $data
     *
     * @return self
     */
    public function setData(?ProductTagOptionModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
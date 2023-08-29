<?php

namespace Starweb\Api\Generated\Model;

class ProductTagModelItem extends \ArrayObject
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
     * @var ProductTagModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagModel|null
     */
    public function getData() : ?ProductTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagModel|null $data
     *
     * @return self
     */
    public function setData(?ProductTagModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
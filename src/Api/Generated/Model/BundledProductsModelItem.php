<?php

namespace Starweb\Api\Generated\Model;

class BundledProductsModelItem extends \ArrayObject
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
     * @var BundledProductsModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return BundledProductsModel|null
     */
    public function getData() : ?BundledProductsModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param BundledProductsModel|null $data
     *
     * @return self
     */
    public function setData(?BundledProductsModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
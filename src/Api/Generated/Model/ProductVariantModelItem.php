<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantModelItem extends \ArrayObject
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
     * @var ProductVariantResponseModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductVariantResponseModel|null
     */
    public function getData() : ?ProductVariantResponseModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductVariantResponseModel|null $data
     *
     * @return self
     */
    public function setData(?ProductVariantResponseModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
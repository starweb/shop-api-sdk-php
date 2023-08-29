<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModelItem extends \ArrayObject
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
     * @var ProductMetaDataTypeModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaDataTypeModel|null
     */
    public function getData() : ?ProductMetaDataTypeModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaDataTypeModel|null $data
     *
     * @return self
     */
    public function setData(?ProductMetaDataTypeModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
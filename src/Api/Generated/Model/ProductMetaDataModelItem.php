<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataModelItem extends \ArrayObject
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
     * @var ProductMetaDataModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaDataModel
     */
    public function getData() : ProductMetaDataModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaDataModel $data
     *
     * @return self
     */
    public function setData(ProductMetaDataModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
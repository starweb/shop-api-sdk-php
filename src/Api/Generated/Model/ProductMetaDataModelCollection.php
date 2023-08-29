<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataModelCollection extends \ArrayObject
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
     * A collection of product meta data
     *
     * @var ProductMetaDataModel[]
     */
    protected $data;
    /**
     * A collection of product meta data
     *
     * @return ProductMetaDataModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data
     *
     * @param ProductMetaDataModel[] $data
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
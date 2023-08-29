<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModelCollection extends \ArrayObject
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
     * A collection of product meta data types
     *
     * @var ProductMetaDataTypeModel[]|null
     */
    protected $data;
    /**
     * A collection of product meta data types
     *
     * @return ProductMetaDataTypeModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data types
     *
     * @param ProductMetaDataTypeModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
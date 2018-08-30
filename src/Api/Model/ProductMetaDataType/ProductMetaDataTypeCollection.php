<?php

namespace Starweb\Api\Model\ProductMetaDataType;

class ProductMetaDataTypeCollection
{
    /**
     * A collection of product meta data types
     *
     * @var ProductMetaDataType[]
     */
    protected $data;
    /**
     * A collection of product meta data types
     *
     * @return ProductMetaDataType[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data types
     *
     * @param ProductMetaDataType[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

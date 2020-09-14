<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModelCollection
{
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
        $this->data = $data;
        return $this;
    }
}
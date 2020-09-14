<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeModelItem
{
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
        $this->data = $data;
        return $this;
    }
}
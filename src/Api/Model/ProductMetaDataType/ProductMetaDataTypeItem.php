<?php

namespace Starweb\Api\Model\ProductMetaDataType;

class ProductMetaDataTypeItem
{
    /**
     * 
     *
     * @var ProductMetaDataType
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaDataType
     */
    public function getData() : ?ProductMetaDataType
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaDataTypeModel $data
     *
     * @return self
     */
    public function setData(?ProductMetaDataTypeModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
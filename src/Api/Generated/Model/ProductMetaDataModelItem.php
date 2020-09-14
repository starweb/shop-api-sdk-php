<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataModelItem
{
    /**
     * 
     *
     * @var ProductMetaDataModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaDataModel|null
     */
    public function getData() : ?ProductMetaDataModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaDataModel|null $data
     *
     * @return self
     */
    public function setData(?ProductMetaDataModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
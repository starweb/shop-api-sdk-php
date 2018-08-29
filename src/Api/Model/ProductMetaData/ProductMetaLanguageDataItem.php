<?php

namespace Starweb\Api\Model\ProductMetaData;

class ProductMetaLanguageDataItem
{
    /**
     * 
     *
     * @var ProductMetaLanguageData
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaLanguageData
     */
    public function getData() : ?ProductMetaLanguageData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaLanguageDataModel $data
     *
     * @return self
     */
    public function setData(?ProductMetaLanguageDataModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
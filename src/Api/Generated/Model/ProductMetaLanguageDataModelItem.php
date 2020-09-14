<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaLanguageDataModelItem
{
    /**
     * 
     *
     * @var ProductMetaLanguageDataModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMetaLanguageDataModel|null
     */
    public function getData() : ?ProductMetaLanguageDataModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMetaLanguageDataModel|null $data
     *
     * @return self
     */
    public function setData(?ProductMetaLanguageDataModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
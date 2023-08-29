<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaLanguageDataModelItem extends \ArrayObject
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
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
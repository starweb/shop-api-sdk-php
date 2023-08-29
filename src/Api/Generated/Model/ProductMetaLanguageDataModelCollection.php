<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaLanguageDataModelCollection extends \ArrayObject
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
     * @var ProductMetaLanguageDataModel[]|null
     */
    protected $data;
    /**
     * A collection of product meta data
     *
     * @return ProductMetaLanguageDataModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data
     *
     * @param ProductMetaLanguageDataModel[]|null $data
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
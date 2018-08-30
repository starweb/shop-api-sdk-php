<?php

namespace Starweb\Api\Model\ProductMetaData;

class ProductMetaLanguageDataCollection
{
    /**
     * A collection of product meta data
     *
     * @var ProductMetaLanguageData[]
     */
    protected $data;
    /**
     * A collection of product meta data
     *
     * @return ProductMetaLanguageData[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data
     *
     * @param ProductMetaLanguageData[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

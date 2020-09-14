<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaLanguageDataModelCollection
{
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
        $this->data = $data;
        return $this;
    }
}
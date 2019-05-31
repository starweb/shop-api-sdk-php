<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataModelCollection
{
    /**
     * A collection of product meta data
     *
     * @var ProductMetaDataModel[]
     */
    protected $data;
    /**
     * A collection of product meta data
     *
     * @return ProductMetaDataModel[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data
     *
     * @param ProductMetaDataModel[] $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
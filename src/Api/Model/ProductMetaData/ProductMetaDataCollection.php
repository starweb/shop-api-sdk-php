<?php

namespace Starweb\Api\Model\ProductMetaData;

class ProductMetaDataCollection
{
    /**
     * A collection of product meta data
     *
     * @var ProductMetaData[]
     */
    protected $data;
    /**
     * A collection of product meta data
     *
     * @return ProductMetaData[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product meta data
     *
     * @param ProductMetaData[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

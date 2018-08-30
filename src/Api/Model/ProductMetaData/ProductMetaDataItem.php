<?php

namespace Starweb\Api\Model\ProductMetaData;

class ProductMetaDataItem
{
    /**
     * @var ProductMetaData
     */
    protected $data;

    /**
     * @return ProductMetaData
     */
    public function getData() : ?ProductMetaData
    {
        return $this->data;
    }

    /**
     * @param ProductMetaData $data
     *
     * @return self
     */
    public function setData(ProductMetaData $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

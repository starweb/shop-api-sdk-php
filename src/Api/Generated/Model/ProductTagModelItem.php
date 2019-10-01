<?php

namespace Starweb\Api\Generated\Model;

class ProductTagModelItem
{
    /**
     * 
     *
     * @var ProductTagModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagModel
     */
    public function getData() : ProductTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagModel $data
     *
     * @return self
     */
    public function setData(ProductTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionModelItem
{
    /**
     * 
     *
     * @var ProductTagOptionModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagOptionModel
     */
    public function getData() : ProductTagOptionModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagOptionModel $data
     *
     * @return self
     */
    public function setData(ProductTagOptionModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
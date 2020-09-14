<?php

namespace Starweb\Api\Generated\Model;

class ProductTagModelItem
{
    /**
     * 
     *
     * @var ProductTagModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagModel|null
     */
    public function getData() : ?ProductTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagModel|null $data
     *
     * @return self
     */
    public function setData(?ProductTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
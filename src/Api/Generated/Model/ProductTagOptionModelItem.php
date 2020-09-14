<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionModelItem
{
    /**
     * 
     *
     * @var ProductTagOptionModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagOptionModel|null
     */
    public function getData() : ?ProductTagOptionModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagOptionModel|null $data
     *
     * @return self
     */
    public function setData(?ProductTagOptionModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
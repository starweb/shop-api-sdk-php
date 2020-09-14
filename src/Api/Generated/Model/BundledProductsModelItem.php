<?php

namespace Starweb\Api\Generated\Model;

class BundledProductsModelItem
{
    /**
     * 
     *
     * @var BundledProductsModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return BundledProductsModel|null
     */
    public function getData() : ?BundledProductsModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param BundledProductsModel|null $data
     *
     * @return self
     */
    public function setData(?BundledProductsModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
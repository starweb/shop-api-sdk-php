<?php

namespace Starweb\Api\Client\Model;

class BundledProductsModelItem
{
    /**
     * 
     *
     * @var BundledProductsModel
     */
    protected $data;
    /**
     * 
     *
     * @return BundledProductsModel
     */
    public function getData() : ?BundledProductsModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param BundledProductsModel $data
     *
     * @return self
     */
    public function setData(?BundledProductsModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
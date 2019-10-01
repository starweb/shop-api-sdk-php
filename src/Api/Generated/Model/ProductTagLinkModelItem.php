<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkModelItem
{
    /**
     * 
     *
     * @var ProductTagLinkModel
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagLinkModel
     */
    public function getData() : ProductTagLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagLinkModel $data
     *
     * @return self
     */
    public function setData(ProductTagLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
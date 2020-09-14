<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkModelItem
{
    /**
     * 
     *
     * @var ProductTagLinkModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductTagLinkModel|null
     */
    public function getData() : ?ProductTagLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductTagLinkModel|null $data
     *
     * @return self
     */
    public function setData(?ProductTagLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
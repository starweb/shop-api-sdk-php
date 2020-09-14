<?php

namespace Starweb\Api\Generated\Model;

class ProductMediaFileLinkModelItem
{
    /**
     * 
     *
     * @var ProductMediaFileLinkModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductMediaFileLinkModel|null
     */
    public function getData() : ?ProductMediaFileLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductMediaFileLinkModel|null $data
     *
     * @return self
     */
    public function setData(?ProductMediaFileLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
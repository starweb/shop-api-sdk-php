<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryLinkModelItem
{
    /**
     * 
     *
     * @var ProductCategoryLinkModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return ProductCategoryLinkModel|null
     */
    public function getData() : ?ProductCategoryLinkModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param ProductCategoryLinkModel|null $data
     *
     * @return self
     */
    public function setData(?ProductCategoryLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
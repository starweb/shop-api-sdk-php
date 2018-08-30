<?php

namespace Starweb\Api\Model\ProductCategoryLink;

class ProductCategoryLinkItem
{
    /**
     *
     *
     * @var ProductCategoryLink
     */
    protected $data;
    /**
     *
     *
     * @return ProductCategoryLink
     */
    public function getData() : ?ProductCategoryLink
    {
        return $this->data;
    }
    /**
     *
     *
     * @param ProductCategoryLinkModel $data
     *
     * @return self
     */
    public function setData(ProductCategoryLinkModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

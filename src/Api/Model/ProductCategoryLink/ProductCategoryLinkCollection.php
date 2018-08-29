<?php

namespace Starweb\Api\Model\ProductCategoryLink;

class ProductCategoryLinkCollection
{
    /**
     * A collection of product category links
     *
     * @var ProductCategoryLink[]
     */
    protected $data;
    /**
     * A collection of product category links
     *
     * @return ProductCategoryLink[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product category links
     *
     * @param ProductCategoryLink[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
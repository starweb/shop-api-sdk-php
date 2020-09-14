<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryLinkModelCollection
{
    /**
     * A collection of product category links
     *
     * @var ProductCategoryLinkModel[]|null
     */
    protected $data;
    /**
     * A collection of product category links
     *
     * @return ProductCategoryLinkModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of product category links
     *
     * @param ProductCategoryLinkModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
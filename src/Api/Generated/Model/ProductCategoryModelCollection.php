<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryModelCollection
{
    /**
     * A list of product categories
     *
     * @var ProductCategoryModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var ProductCategoryModelCollectionMeta|null
     */
    protected $meta;
    /**
     * A list of product categories
     *
     * @return ProductCategoryModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of product categories
     *
     * @param ProductCategoryModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return ProductCategoryModelCollectionMeta|null
     */
    public function getMeta() : ?ProductCategoryModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param ProductCategoryModelCollectionMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?ProductCategoryModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
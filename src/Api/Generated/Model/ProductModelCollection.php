<?php

namespace Starweb\Api\Generated\Model;

class ProductModelCollection
{
    /**
     * A collection of products
     *
     * @var ProductModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var ProductModelCollectionMeta|null
     */
    protected $meta;
    /**
     * A collection of products
     *
     * @return ProductModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of products
     *
     * @param ProductModel[]|null $data
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
     * @return ProductModelCollectionMeta|null
     */
    public function getMeta() : ?ProductModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param ProductModelCollectionMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?ProductModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
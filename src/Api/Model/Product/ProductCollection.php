<?php

namespace Starweb\Api\Model\Product;

class ProductCollection
{
    /**
     * A collection of products
     *
     * @var Product[]
     */
    protected $data;
    /**
     *
     *
     * @var ProductCollectionMeta
     */
    protected $meta;
    /**
     * A collection of products
     *
     * @return Product[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of products
     *
     * @param Product[]
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
     * @return ProductCollectionMeta
     */
    public function getMeta() : ?ProductCollectionMeta
    {
        return $this->meta;
    }
    /**
     *
     *
     * @param ProductModelCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(?ProductModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}

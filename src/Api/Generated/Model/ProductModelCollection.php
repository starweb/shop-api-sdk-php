<?php

namespace Starweb\Api\Generated\Model;

class ProductModelCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A collection of products
     *
     * @var ProductModel[]
     */
    protected $data;
    /**
     * 
     *
     * @var ProductModelCollectionMeta
     */
    protected $meta;
    /**
     * A collection of products
     *
     * @return ProductModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of products
     *
     * @param ProductModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return ProductModelCollectionMeta
     */
    public function getMeta() : ProductModelCollectionMeta
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
    public function setMeta(ProductModelCollectionMeta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
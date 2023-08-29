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
        $this->initialized['data'] = true;
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
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
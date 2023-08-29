<?php

namespace Starweb\Api\Generated\Model;

class CustomerModelCollection extends \ArrayObject
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
     * A list of customers
     *
     * @var CustomerModel[]
     */
    protected $data;
    /**
     * 
     *
     * @var CustomerModelCollectionMeta
     */
    protected $meta;
    /**
     * A list of customers
     *
     * @return CustomerModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of customers
     *
     * @param CustomerModel[] $data
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
     * @return CustomerModelCollectionMeta
     */
    public function getMeta() : CustomerModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param CustomerModelCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(CustomerModelCollectionMeta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class CustomerModelCollection
{
    /**
     * A list of customers
     *
     * @var CustomerModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var CustomerModelCollectionMeta|null
     */
    protected $meta;
    /**
     * A list of customers
     *
     * @return CustomerModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customers
     *
     * @param CustomerModel[]|null $data
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
     * @return CustomerModelCollectionMeta|null
     */
    public function getMeta() : ?CustomerModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param CustomerModelCollectionMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?CustomerModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
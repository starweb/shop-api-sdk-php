<?php

namespace Starweb\Api\Model\Customer;

use Starweb\Api\Model\CollectionInterface;

class CustomerCollection implements CollectionInterface
{
    /**
     * A list of customers
     *
     * @var Customer[]
     */
    protected $data;
    /**
     *
     *
     * @var CustomerCollectionMeta
     */
    protected $meta;
    /**
     * A list of customers
     *
     * @return Customer[]
     */
    public function getData() : array
    {
        return $this->data;
    }

    /**
     * A list of customers
     *
     * @param Customer[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return CustomerCollectionMeta
     */
    public function getMeta() : ?CustomerCollectionMeta
    {
        return $this->meta;
    }

    /**
     * @param CustomerCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(CustomerCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}

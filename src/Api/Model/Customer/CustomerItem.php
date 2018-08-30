<?php

namespace Starweb\Api\Model\Customer;

class CustomerItem
{
    /**
     *
     *
     * @var Customer
     */
    protected $data;
    /**
     *
     *
     * @return Customer
     */
    public function getData() : ?Customer
    {
        return $this->data;
    }
    /**
     *
     *
     * @param Customer $data
     *
     * @return self
     */
    public function setData(?Customer $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

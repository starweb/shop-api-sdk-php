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
     * @param CustomerModel $data
     *
     * @return self
     */
    public function setData(?CustomerModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

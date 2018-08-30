<?php

namespace Starweb\Api\Model\CustomerTag;

class CustomerTagItem
{
    /**
     *
     *
     * @var CustomerTag
     */
    protected $data;
    /**
     *
     *
     * @return CustomerTag
     */
    public function getData() : ?CustomerTag
    {
        return $this->data;
    }
    /**
     *
     *
     * @param CustomerAddedTag $data
     *
     * @return self
     */
    public function setData(CustomerAddedTag $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

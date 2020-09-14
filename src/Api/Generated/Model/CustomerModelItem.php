<?php

namespace Starweb\Api\Generated\Model;

class CustomerModelItem
{
    /**
     * 
     *
     * @var CustomerModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerModel|null
     */
    public function getData() : ?CustomerModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
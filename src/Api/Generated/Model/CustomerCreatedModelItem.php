<?php

namespace Starweb\Api\Generated\Model;

class CustomerCreatedModelItem
{
    /**
     * 
     *
     * @var CustomerCreatedModel
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerCreatedModel
     */
    public function getData() : CustomerCreatedModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerCreatedModel $data
     *
     * @return self
     */
    public function setData(CustomerCreatedModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
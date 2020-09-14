<?php

namespace Starweb\Api\Generated\Model;

class CustomerCreatedModelItem
{
    /**
     * 
     *
     * @var CustomerCreatedModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerCreatedModel|null
     */
    public function getData() : ?CustomerCreatedModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerCreatedModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerCreatedModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
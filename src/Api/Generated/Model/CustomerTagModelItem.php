<?php

namespace Starweb\Api\Generated\Model;

class CustomerTagModelItem
{
    /**
     * 
     *
     * @var CustomerTagModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerTagModel|null
     */
    public function getData() : ?CustomerTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerTagModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddedTagModelItem
{
    /**
     * 
     *
     * @var CustomerAddedTagModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddedTagModel|null
     */
    public function getData() : ?CustomerAddedTagModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerAddedTagModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerAddedTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
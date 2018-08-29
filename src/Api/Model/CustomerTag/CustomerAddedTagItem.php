<?php

namespace Starweb\Api\Model\CustomerTag;

class CustomerAddedTagItem
{
    /**
     * 
     *
     * @var CustomerAddedTag
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerAddedTag
     */
    public function getData() : ?CustomerAddedTag
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerAddedTagModel $data
     *
     * @return self
     */
    public function setData(?CustomerAddedTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
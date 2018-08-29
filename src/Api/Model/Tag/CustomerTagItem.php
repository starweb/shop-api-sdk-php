<?php

namespace Starweb\Api\Model\;

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
     * @param CustomerTagModel $data
     *
     * @return self
     */
    public function setData(?CustomerTagModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
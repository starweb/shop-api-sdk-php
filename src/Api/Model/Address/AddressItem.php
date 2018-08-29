<?php

namespace Starweb\Api\Model\Address;

class AddressItem
{
    /**
     * 
     *
     * @var Address
     */
    protected $data;
    /**
     * 
     *
     * @return Address
     */
    public function getData() : ?Address
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param AddressModel $data
     *
     * @return self
     */
    public function setData(?AddressModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
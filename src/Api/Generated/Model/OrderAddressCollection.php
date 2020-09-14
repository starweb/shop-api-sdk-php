<?php

namespace Starweb\Api\Generated\Model;

class OrderAddressCollection
{
    /**
     * 
     *
     * @var OrderAddressModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderAddressModel|null
     */
    public function getData() : ?OrderAddressModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderAddressModel|null $data
     *
     * @return self
     */
    public function setData(?OrderAddressModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
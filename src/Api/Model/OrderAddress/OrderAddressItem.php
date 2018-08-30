<?php

namespace Starweb\Api\Model\OrderAddress;

use Starweb\Api\Model\Address\Address;

class OrderAddressItem
{
    /**
     * @var Address
     */
    protected $data;

    /**
     *
     *
     * @return Address
     */
    public function getData(): Address
    {
        return $this->data;
    }

    /**
     *
     *
     * @param Address $data
     *
     * @return self
     */
    public function setData(Address $data): self
    {
        $this->data = $data;

        return $this;
    }
}

<?php

namespace Starweb\Api\Model\CustomerTag;

class CustomerAddedTagCollection
{
    /**
     * A list of customer tags
     *
     * @var CustomerAddedTag[]
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerAddedTag[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerAddedTag[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
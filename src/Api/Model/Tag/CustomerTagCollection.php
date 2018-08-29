<?php

namespace Starweb\Api\Model\;

class CustomerTagCollection
{
    /**
     * A list of customer tags
     *
     * @var CustomerTag[]
     */
    protected $data;
    /**
     * A list of customer tags
     *
     * @return CustomerTag[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param CustomerTag[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Model\CustomerExternalService;

class CustomerExternalServicesCollection
{
    /**
     * A list of customer external services
     *
     * @var CustomerExternalServices[]
     */
    protected $data;
    /**
     * A list of customer external services
     *
     * @return CustomerExternalServices[]
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer external services
     *
     * @param CustomerExternalServices[]
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
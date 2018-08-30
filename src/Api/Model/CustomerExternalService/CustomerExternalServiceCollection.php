<?php

namespace Starweb\Api\Model\CustomerExternalService;

class CustomerExternalServiceCollection
{
    /**
     * A list of customer external services
     *
     * @var CustomerExternalService[]
     */
    protected $data;
    /**
     * A list of customer external services
     *
     * @return CustomerExternalService[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of customer external services
     *
     * @param CustomerExternalService[]
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

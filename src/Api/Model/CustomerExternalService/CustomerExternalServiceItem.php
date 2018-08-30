<?php

namespace Starweb\Api\Model\CustomerExternalService;

class CustomerExternalServiceItem
{
    /**
     *
     *
     * @var CustomerExternalService
     */
    protected $data;
    /**
     *
     *
     * @return CustomerExternalService
     */
    public function getData() : ?CustomerExternalService
    {
        return $this->data;
    }
    /**
     *
     *
     * @param CustomerExternalService $data
     *
     * @return self
     */
    public function setData(?CustomerExternalService $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

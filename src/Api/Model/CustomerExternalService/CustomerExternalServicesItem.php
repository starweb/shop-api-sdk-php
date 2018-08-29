<?php

namespace Starweb\Api\Model\CustomerExternalService;

class CustomerExternalServicesItem
{
    /**
     * 
     *
     * @var CustomerExternalServices
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerExternalServices
     */
    public function getData() : ?CustomerExternalServices
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerExternalServicesModel $data
     *
     * @return self
     */
    public function setData(?CustomerExternalServicesModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
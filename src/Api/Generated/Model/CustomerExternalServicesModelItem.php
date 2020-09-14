<?php

namespace Starweb\Api\Generated\Model;

class CustomerExternalServicesModelItem
{
    /**
     * 
     *
     * @var CustomerExternalServicesModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return CustomerExternalServicesModel|null
     */
    public function getData() : ?CustomerExternalServicesModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerExternalServicesModel|null $data
     *
     * @return self
     */
    public function setData(?CustomerExternalServicesModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
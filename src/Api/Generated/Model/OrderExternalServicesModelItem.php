<?php

namespace Starweb\Api\Generated\Model;

class OrderExternalServicesModelItem
{
    /**
     * 
     *
     * @var OrderExternalServiceModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderExternalServiceModel|null
     */
    public function getData() : ?OrderExternalServiceModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderExternalServiceModel|null $data
     *
     * @return self
     */
    public function setData(?OrderExternalServiceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
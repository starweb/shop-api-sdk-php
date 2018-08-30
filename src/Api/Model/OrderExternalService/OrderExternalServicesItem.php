<?php

namespace Starweb\Api\Model\OrderExternalService;

class OrderExternalServicesItem
{
    /**
     *
     *
     * @var OrderExternalService
     */
    protected $data;
    /**
     *
     *
     * @return OrderExternalService
     */
    public function getData() : ?OrderExternalService
    {
        return $this->data;
    }
    /**
     *
     *
     * @param OrderExternalServiceModel $data
     *
     * @return self
     */
    public function setData(?OrderExternalServiceModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

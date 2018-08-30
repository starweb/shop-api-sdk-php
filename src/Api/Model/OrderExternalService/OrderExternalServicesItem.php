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
     * @param OrderExternalService $data
     *
     * @return self
     */
    public function setData(?OrderExternalService $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

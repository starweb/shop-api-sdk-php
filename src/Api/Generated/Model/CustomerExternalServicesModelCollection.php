<?php

namespace Starweb\Api\Generated\Model;

class CustomerExternalServicesModelCollection
{
    /**
     * A list of customer external services
     *
     * @var CustomerExternalServicesModel[]|null
     */
    protected $data;
    /**
     * A list of customer external services
     *
     * @return CustomerExternalServicesModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of customer external services
     *
     * @param CustomerExternalServicesModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
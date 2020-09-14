<?php

namespace Starweb\Api\Generated\Model;

class OrderExternalServiceModelCollection
{
    /**
     * A list of order external services
     *
     * @var OrderExternalServiceModel[]|null
     */
    protected $data;
    /**
     * A list of order external services
     *
     * @return OrderExternalServiceModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order external services
     *
     * @param OrderExternalServiceModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
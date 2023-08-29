<?php

namespace Starweb\Api\Generated\Model;

class OrderExternalServiceModelCollection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A list of order external services
     *
     * @var OrderExternalServiceModel[]
     */
    protected $data;
    /**
     * A list of order external services
     *
     * @return OrderExternalServiceModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of order external services
     *
     * @param OrderExternalServiceModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class CustomerExternalServicesModelCollection extends \ArrayObject
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
     * A list of customer external services
     *
     * @var CustomerExternalServicesModel[]
     */
    protected $data;
    /**
     * A list of customer external services
     *
     * @return CustomerExternalServicesModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of customer external services
     *
     * @param CustomerExternalServicesModel[] $data
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
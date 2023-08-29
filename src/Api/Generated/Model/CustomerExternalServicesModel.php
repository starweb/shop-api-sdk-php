<?php

namespace Starweb\Api\Generated\Model;

class CustomerExternalServicesModel extends \ArrayObject
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
     * The service name of the external service
     *
     * @var string
     */
    protected $serviceName;
    /**
     * The external service ID
     *
     * @var string
     */
    protected $externalIdValue;
    /**
     * The service name of the external service
     *
     * @return string
     */
    public function getServiceName() : string
    {
        return $this->serviceName;
    }
    /**
     * The service name of the external service
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName) : self
    {
        $this->initialized['serviceName'] = true;
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * The external service ID
     *
     * @return string
     */
    public function getExternalIdValue() : string
    {
        return $this->externalIdValue;
    }
    /**
     * The external service ID
     *
     * @param string $externalIdValue
     *
     * @return self
     */
    public function setExternalIdValue(string $externalIdValue) : self
    {
        $this->initialized['externalIdValue'] = true;
        $this->externalIdValue = $externalIdValue;
        return $this;
    }
}
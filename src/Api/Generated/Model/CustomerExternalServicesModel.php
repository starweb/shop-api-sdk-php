<?php

namespace Starweb\Api\Generated\Model;

class CustomerExternalServicesModel
{
    /**
     * The service name of the external service
     *
     * @var string|null
     */
    protected $serviceName;
    /**
     * The external service ID
     *
     * @var string|null
     */
    protected $externalIdValue;
    /**
     * The service name of the external service
     *
     * @return string|null
     */
    public function getServiceName() : ?string
    {
        return $this->serviceName;
    }
    /**
     * The service name of the external service
     *
     * @param string|null $serviceName
     *
     * @return self
     */
    public function setServiceName(?string $serviceName) : self
    {
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * The external service ID
     *
     * @return string|null
     */
    public function getExternalIdValue() : ?string
    {
        return $this->externalIdValue;
    }
    /**
     * The external service ID
     *
     * @param string|null $externalIdValue
     *
     * @return self
     */
    public function setExternalIdValue(?string $externalIdValue) : self
    {
        $this->externalIdValue = $externalIdValue;
        return $this;
    }
}
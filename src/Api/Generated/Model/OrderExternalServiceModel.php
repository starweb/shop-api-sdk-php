<?php

namespace Starweb\Api\Generated\Model;

class OrderExternalServiceModel
{
    /**
     * The service name that this external id is linked to. Please note that this service name has to be unique for the order
     *
     * @var string
     */
    protected $serviceName;
    /**
     * The external id
     *
     * @var string
     */
    protected $externalIdValue;
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * The service name that this external id is linked to. Please note that this service name has to be unique for the order
     *
     * @return string
     */
    public function getServiceName() : string
    {
        return $this->serviceName;
    }
    /**
     * The service name that this external id is linked to. Please note that this service name has to be unique for the order
     *
     * @param string $serviceName
     *
     * @return self
     */
    public function setServiceName(string $serviceName) : self
    {
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * The external id
     *
     * @return string
     */
    public function getExternalIdValue() : string
    {
        return $this->externalIdValue;
    }
    /**
     * The external id
     *
     * @param string $externalIdValue
     *
     * @return self
     */
    public function setExternalIdValue(string $externalIdValue) : self
    {
        $this->externalIdValue = $externalIdValue;
        return $this;
    }
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @return bool
     */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->readOnly = $readOnly;
        return $this;
    }
}
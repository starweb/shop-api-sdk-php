<?php

namespace Starweb\Api\Generated\Model;

class OrderExternalServiceModel extends \ArrayObject
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
     * The service name that this external id is linked to. Please note that this service name has to be unique for the order
     *
     * @var string|null
     */
    protected $serviceName;
    /**
     * The external id
     *
     * @var string|null
     */
    protected $externalIdValue;
    /**
     * Agent id for nShift agent if applicable
     *
     * @var string|null
     */
    protected $agent;
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @var bool|null
     */
    protected $readOnly;
    /**
     * The service name that this external id is linked to. Please note that this service name has to be unique for the order
     *
     * @return string|null
     */
    public function getServiceName() : ?string
    {
        return $this->serviceName;
    }
    /**
     * The service name that this external id is linked to. Please note that this service name has to be unique for the order
     *
     * @param string|null $serviceName
     *
     * @return self
     */
    public function setServiceName(?string $serviceName) : self
    {
        $this->initialized['serviceName'] = true;
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * The external id
     *
     * @return string|null
     */
    public function getExternalIdValue() : ?string
    {
        return $this->externalIdValue;
    }
    /**
     * The external id
     *
     * @param string|null $externalIdValue
     *
     * @return self
     */
    public function setExternalIdValue(?string $externalIdValue) : self
    {
        $this->initialized['externalIdValue'] = true;
        $this->externalIdValue = $externalIdValue;
        return $this;
    }
    /**
     * Agent id for nShift agent if applicable
     *
     * @return string|null
     */
    public function getAgent() : ?string
    {
        return $this->agent;
    }
    /**
     * Agent id for nShift agent if applicable
     *
     * @param string|null $agent
     *
     * @return self
     */
    public function setAgent(?string $agent) : self
    {
        $this->initialized['agent'] = true;
        $this->agent = $agent;
        return $this;
    }
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @return bool|null
     */
    public function getReadOnly() : ?bool
    {
        return $this->readOnly;
    }
    /**
     * Some external services cannot be updated and they have readOnly set to true
     *
     * @param bool|null $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly) : self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
}
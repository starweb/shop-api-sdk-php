<?php

namespace Starweb\Api\Generated\Model;

class ClientCredentialModel extends \ArrayObject
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
     * The grant type to use for the request. At this time, only client_credentials is allowed
     *
     * @var string|null
     */
    protected $grantType;
    /**
     * Your client id
     *
     * @var string|null
     */
    protected $clientId;
    /**
     * Your client secret
     *
     * @var string|null
     */
    protected $clientSecret;
    /**
     * The grant type to use for the request. At this time, only client_credentials is allowed
     *
     * @return string|null
     */
    public function getGrantType() : ?string
    {
        return $this->grantType;
    }
    /**
     * The grant type to use for the request. At this time, only client_credentials is allowed
     *
     * @param string|null $grantType
     *
     * @return self
     */
    public function setGrantType(?string $grantType) : self
    {
        $this->initialized['grantType'] = true;
        $this->grantType = $grantType;
        return $this;
    }
    /**
     * Your client id
     *
     * @return string|null
     */
    public function getClientId() : ?string
    {
        return $this->clientId;
    }
    /**
     * Your client id
     *
     * @param string|null $clientId
     *
     * @return self
     */
    public function setClientId(?string $clientId) : self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * Your client secret
     *
     * @return string|null
     */
    public function getClientSecret() : ?string
    {
        return $this->clientSecret;
    }
    /**
     * Your client secret
     *
     * @param string|null $clientSecret
     *
     * @return self
     */
    public function setClientSecret(?string $clientSecret) : self
    {
        $this->initialized['clientSecret'] = true;
        $this->clientSecret = $clientSecret;
        return $this;
    }
}
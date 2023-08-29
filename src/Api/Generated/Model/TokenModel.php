<?php

namespace Starweb\Api\Generated\Model;

class TokenModel extends \ArrayObject
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
     * The Access Token to use in future requests
     *
     * @var string|null
     */
    protected $accessToken;
    /**
     * The scope this access token is valid for
     *
     * @var string|null
     */
    protected $scope;
    /**
     * The number of seconds until this access token expires
     *
     * @var int|null
     */
    protected $expiresIn;
    /**
     * The Access Token to use in future requests
     *
     * @return string|null
     */
    public function getAccessToken() : ?string
    {
        return $this->accessToken;
    }
    /**
     * The Access Token to use in future requests
     *
     * @param string|null $accessToken
     *
     * @return self
     */
    public function setAccessToken(?string $accessToken) : self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     * The scope this access token is valid for
     *
     * @return string|null
     */
    public function getScope() : ?string
    {
        return $this->scope;
    }
    /**
     * The scope this access token is valid for
     *
     * @param string|null $scope
     *
     * @return self
     */
    public function setScope(?string $scope) : self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
     * The number of seconds until this access token expires
     *
     * @return int|null
     */
    public function getExpiresIn() : ?int
    {
        return $this->expiresIn;
    }
    /**
     * The number of seconds until this access token expires
     *
     * @param int|null $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(?int $expiresIn) : self
    {
        $this->initialized['expiresIn'] = true;
        $this->expiresIn = $expiresIn;
        return $this;
    }
}
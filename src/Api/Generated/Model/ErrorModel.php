<?php

namespace Starweb\Api\Generated\Model;

class ErrorModel extends \ArrayObject
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
     * An error code for this type of error
     *
     * @var string
     */
    protected $error;
    /**
     * A human readable description of the error
     *
     * @var string
     */
    protected $errorDescription;
    /**
     * An error code for this type of error
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * An error code for this type of error
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * A human readable description of the error
     *
     * @return string
     */
    public function getErrorDescription() : string
    {
        return $this->errorDescription;
    }
    /**
     * A human readable description of the error
     *
     * @param string $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(string $errorDescription) : self
    {
        $this->initialized['errorDescription'] = true;
        $this->errorDescription = $errorDescription;
        return $this;
    }
}
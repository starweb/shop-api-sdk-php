<?php

namespace Starweb\Api\Generated\Model;

class ErrorModel
{
    /**
     * An error code for this type of error
     *
     * @var string|null
     */
    protected $error;
    /**
     * A human readable description of the error
     *
     * @var string|null
     */
    protected $errorDescription;
    /**
     * An error code for this type of error
     *
     * @return string|null
     */
    public function getError() : ?string
    {
        return $this->error;
    }
    /**
     * An error code for this type of error
     *
     * @param string|null $error
     *
     * @return self
     */
    public function setError(?string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * A human readable description of the error
     *
     * @return string|null
     */
    public function getErrorDescription() : ?string
    {
        return $this->errorDescription;
    }
    /**
     * A human readable description of the error
     *
     * @param string|null $errorDescription
     *
     * @return self
     */
    public function setErrorDescription(?string $errorDescription) : self
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }
}
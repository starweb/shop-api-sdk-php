<?php

namespace Starweb\Api\Generated\Exception;

class PutOrderStatusForbiddenException extends ForbiddenException
{
    /**
     * @var \Starweb\Api\Generated\Model\ErrorModel
     */
    private $errorModel;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Starweb\Api\Generated\Model\ErrorModel $errorModel, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad request');
        $this->errorModel = $errorModel;
        $this->response = $response;
    }
    public function getErrorModel() : \Starweb\Api\Generated\Model\ErrorModel
    {
        return $this->errorModel;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
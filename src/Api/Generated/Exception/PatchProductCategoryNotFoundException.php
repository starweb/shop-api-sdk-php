<?php

namespace Starweb\Api\Generated\Exception;

class PatchProductCategoryNotFoundException extends NotFoundException
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
        parent::__construct('Entity not found');
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
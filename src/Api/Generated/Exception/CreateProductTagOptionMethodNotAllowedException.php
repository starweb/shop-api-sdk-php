<?php

namespace Starweb\Api\Generated\Exception;

class CreateProductTagOptionMethodNotAllowedException extends \RuntimeException implements ClientException
{
    private $errorModel;
    public function __construct(\Starweb\Api\Generated\Model\ErrorModel $errorModel)
    {
        parent::__construct('Method Not Allowed', 405);
        $this->errorModel = $errorModel;
    }
    public function getErrorModel()
    {
        return $this->errorModel;
    }
}
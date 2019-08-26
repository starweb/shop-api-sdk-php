<?php

namespace Starweb\Api\Generated\Exception;

class DeleteStockLocationForbiddenException extends \RuntimeException implements ClientException
{
    private $errorModel;
    public function __construct(\Starweb\Api\Generated\Model\ErrorModel $errorModel)
    {
        parent::__construct('Forbidden', 403);
        $this->errorModel = $errorModel;
    }
    public function getErrorModel()
    {
        return $this->errorModel;
    }
}
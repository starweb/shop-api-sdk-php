<?php

namespace Starweb\Api\Generated\Exception;

class DeleteMediaFileNotFoundException extends \RuntimeException implements ClientException
{
    private $errorModel;
    public function __construct(\Starweb\Api\Generated\Model\ErrorModel $errorModel)
    {
        parent::__construct('Entity not found', 404);
        $this->errorModel = $errorModel;
    }
    public function getErrorModel()
    {
        return $this->errorModel;
    }
}
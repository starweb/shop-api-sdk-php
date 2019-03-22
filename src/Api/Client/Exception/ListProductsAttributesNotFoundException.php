<?php

namespace Starweb\Api\Client\Exception;

class ListProductsAttributesNotFoundException extends \RuntimeException implements ClientException
{
    private $errorModel;
    function __construct(\Starweb\Api\Client\Model\ErrorModel $errorModel)
    {
        parent::__construct('Bad request', 404);
        $this->errorModel = $errorModel;
    }
    function getErrorModel()
    {
        return $this->errorModel;
    }
}
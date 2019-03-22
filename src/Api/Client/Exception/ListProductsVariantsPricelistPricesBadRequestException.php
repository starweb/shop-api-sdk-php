<?php

namespace Starweb\Api\Client\Exception;

class ListProductsVariantsPricelistPricesBadRequestException extends \RuntimeException implements ClientException
{
    private $errorModel;
    function __construct(\Starweb\Api\Client\Model\ErrorModel $errorModel)
    {
        parent::__construct('Bad request', 400);
        $this->errorModel = $errorModel;
    }
    function getErrorModel()
    {
        return $this->errorModel;
    }
}
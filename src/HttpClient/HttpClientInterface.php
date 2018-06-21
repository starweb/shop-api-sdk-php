<?php

namespace Starweb\HttpClient;

use Psr\Http\Message\ResponseInterface;
use Starweb\Operation\OperationInterface;

interface HttpClientInterface
{
    public const REQUEST_TOKEN_ENDPOINT = 'token';

    public function getBaseUri(): string;

    public function executeEndpointOperation(OperationInterface $operation): ResponseInterface;
}
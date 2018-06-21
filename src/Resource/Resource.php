<?php

namespace Starweb\Resource;

use Http\Client\Common\Exception\ClientErrorException;
use Http\Client\HttpClient;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use Starweb\Authentication\TokenCacheInterface;
use Starweb\Exception\StarwebApiException;
use Starweb\Operation\OperationInterface;

abstract class Resource implements ResourceInterface
{
    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * @var TokenCacheInterface
     */
    protected $tokenCache;

    /**
     * Resource constructor.
     *
     * @param HttpClient $client
     */
    public function __construct(HttpClient $client, TokenCacheInterface $tokenCache)
    {
        $this->client = $client;
        $this->tokenCache = $tokenCache;
    }

    /**
     * @param OperationInterface $operation
     * @return ResponseInterface
     * @throws StarwebApiException
     * @throws \Http\Client\Exception
     */
    public function executeEndpointOperation(OperationInterface $operation): ResponseInterface
    {
        $request = new Request(
            $operation->getMethod(),
            $operation->getUri(),
            $operation->getHeaders(),
            $operation->getBody()
        );

        try {
            $response = $this->client->sendRequest($request);
            return $response;

        } catch (ClientErrorException $exception) {

            if (401 === $exception->getCode()) {
                $this->tokenCache->clear();

                $this->executeEndpointOperation($operation);
            }
        }
    }
}

<?php

namespace Starweb\HttpClient\Plugin;

use Http\Client\Common\Exception\ClientErrorException;
use Http\Client\Common\Exception\ServerErrorException;
use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Starweb\HttpClient\Message\EnhancedResponse;

/**
 * Throw exception when the response of a request is not acceptable.
 *
 * Status codes 400-499 lead to a ClientErrorException, status 500-599 to a ServerErrorException.
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
final class ErrorPlugin implements Plugin
{
    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        $promise = $next($request);

        return $promise->then(function (ResponseInterface $response) use ($request) {
            return $this->transformResponseToException($request, $response);
        });
    }

    /**
     * Transform response to an error if possible.
     *
     * @param RequestInterface  $request  Request of the call
     * @param ResponseInterface $response Response of the call
     *
     * @throws ClientErrorException If response status code is a 4xx
     * @throws ServerErrorException If response status code is a 5xx
     *
     * @return ResponseInterface If status code is not in 4xx or 5xx return response
     */
    protected function transformResponseToException(RequestInterface $request, ResponseInterface $response)
    {
        if ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            $response = new EnhancedResponse($response);
            $content = $response->getContent();

            throw new ClientErrorException($content['error_description'], $request, $response);
        }

        if ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            $response = new EnhancedResponse($response);

            throw new ServerErrorException($response->getReasonPhrase(), $request, $response);
        }

        return $response;
    }
}

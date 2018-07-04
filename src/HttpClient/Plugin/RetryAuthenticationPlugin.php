<?php

namespace Starweb\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Http\Client\HttpClient;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Exception\MaximumAuthenticationAttemptsReachedException;

class RetryAuthenticationPlugin implements Plugin
{
    /**
     * the maximum number of
     */
    private const MAXIMUM_ATTEMPTS = 2;

    /**
     * @var int
     */
    private $retryCount = 0;

    /**
     * @var TokenManager
     */
    private $tokenManager;

    /**
     * RetryAuthenticationPlugin constructor.
     *
     * @param TokenManager $tokenManager
     */
    public function __construct(TokenManager $tokenManager)
    {
        $this->tokenManager = $tokenManager;
    }

    /**
     * @param RequestInterface $request
     * @param callable $next
     * @param callable $first
     *
     * @return Promise
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $promise = $next($request);

        return $promise->then(function (ResponseInterface $response) use ($request, $first) {
            $statusCode = $response->getStatusCode();
            $content = json_decode($response->getBody(), true);

            if (401 === $statusCode && 'invalid_token' === $content['error']) {
                if (self::MAXIMUM_ATTEMPTS <= $this->retryCount) {
                    throw new MaximumAuthenticationAttemptsReachedException(
                        sprintf(
                            'the maxium number of %s authentication attempts has been reached.',
                            self::MAXIMUM_ATTEMPTS
                        )
                    );
                }
                $this->tokenManager->refreshToken();
                $this->retryCount++;

                return $first($request);
            }

            return $response;
        });
    }
}

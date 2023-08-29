<?php declare(strict_types=1);

namespace Starweb\HttpClient\Plugin;

use Http\Client\Common\Exception\ClientErrorException;
use Http\Client\Common\Exception\ServerErrorException;
use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Copyright (c) 2015-2016 PHP HTTP Team <team@php-http.org>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
/**
 * This class has been copied from https://github.com/php-http/client-common/blob/master/src/Plugin/ErrorPlugin.php
 * and adapted to use the error description from the response body inside the transformResponseToException function.
 * The according licence has been added in the doc bloc above this comment.
 *
 * Throw exception when the response of a request is not acceptable.
 *
 * Status codes 400-499 lead to a ClientErrorException, status 500-599 to a ServerErrorException.
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
final class ErrorPlugin implements Plugin
{
    public const SECONDS_TO_SLEEP_ON_MAX_REQUEST_PER_MINUTE_ERROR = 5;

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): \Http\Promise\Promise
    {
        $promise = $next($request);

        return $promise->then(function (ResponseInterface $response) use ($request, $first) {
            return $this->transformResponseToException($request, $response, $first);
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
    protected function transformResponseToException(
        RequestInterface $request,
        ResponseInterface $response,
        callable $first
    ) {
        if ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            $content = \json_decode($response->getBody()->__toString(), true);

            if (is_array($content) && $this->isMaxRequestsLimitResponse($content)) {

                // Starweb Shop API SDKs limit is 1000 requests per minute, so we sleep in incremental
                // steps of seconds before we restart the request processing chain
                sleep(self::SECONDS_TO_SLEEP_ON_MAX_REQUEST_PER_MINUTE_ERROR);
                $first($request);
            } else {
                throw new ClientErrorException($content['error_description'] ?? 'Malformed resposne from server.', $request, $response);
            }
        }

        if ($response->getStatusCode() >= 500 && $response->getStatusCode() < 600) {
            throw new ServerErrorException($response->getReasonPhrase(), $request, $response);
        }

        return $response;
    }

    private function isMaxRequestsLimitResponse(array $content): bool
    {
        if (!array_key_exists('error', $content)) {
            return false;
        }

        return $content['error'] === 'Too Many Requests';
    }
}

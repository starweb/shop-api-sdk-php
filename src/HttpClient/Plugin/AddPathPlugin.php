<?php declare(strict_types=1);

namespace Starweb\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

/**
 * Customized AddPathPlugin from php-http/client-common:2.x branch.
 *
 * @see https://github.com/php-http/client-common/blob/2.0.0/src/Plugin/AddPathPlugin.php
 * @see https://github.com/php-http/client-common/issues/171
 * @see https://github.com/php-http/client-common/issues/141
 */
final class AddPathPlugin implements Plugin
{
    /**
     * The URI.
     *
     * @var \Psr\Http\Message\UriInterface
     */
    private $uri;

    /**
     * AddPathPlugin constructor.
     *
     * @param \Psr\Http\Message\UriInterface $uri
     *   The URI.
     */
    public function __construct(UriInterface $uri)
    {
        if ('' === $uri->getPath()) {
            throw new \InvalidArgumentException('URI path cannot be empty');
        }
        if ('/' === substr($uri->getPath(), -1)) {
            $uri = $uri->withPath(rtrim($uri->getPath(), '/'));
        }
        $this->uri = $uri;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $prepend = $this->uri->getPath();
        $path = $request->getUri()->getPath();
        if (0 !== strpos($path, $prepend)) {
            $request = $request->withUri($request->getUri()->withPath($prepend . $path));
        }

        return $next($request);
    }
}

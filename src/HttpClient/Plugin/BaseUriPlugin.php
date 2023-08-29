<?php declare(strict_types=1);

namespace Starweb\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;
use Http\Client\Common\Plugin\AddHostPlugin;

/**
 * Forked version of the original plugin from the php-http/client-common:1.x branch which uses our custom fixed
 * version of the AddPathPlugin regarding identifiert collision
 *
 * @see AddPathPlugin
 * @see https://github.com/php-http/client-common/blob/1.9.1/src/Plugin/BaseUriPlugin.php
 *
 * Combines the AddHostPlugin and AddPathPlugin.
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
final class BaseUriPlugin implements Plugin
{
    /**
     * @var AddHostPlugin
     */
    private $addHostPlugin;

    /**
     * @var AddPathPlugin|null
     */
    private $addPathPlugin = null;

    /**
     * @param UriInterface $uri        Has to contain a host name and cans have a path.
     * @param array        $hostConfig Config for AddHostPlugin. @see AddHostPlugin::configureOptions
     */
    public function __construct(UriInterface $uri, array $hostConfig = [])
    {
        $this->addHostPlugin = new AddHostPlugin($uri, $hostConfig);

        if (rtrim($uri->getPath(), '/')) {
            $this->addPathPlugin = new AddPathPlugin($uri);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): \Http\Promise\Promise
    {
        $addHostNext = function (RequestInterface $request) use ($next, $first) {
            return $this->addHostPlugin->handleRequest($request, $next, $first);
        };

        if ($this->addPathPlugin) {
            return $this->addPathPlugin->handleRequest($request, $addHostNext, $first);
        }

        return $addHostNext($request);
    }
}

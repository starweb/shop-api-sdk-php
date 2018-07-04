<?php

namespace Starweb\HttpClient;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClientFactory;
use Http\Client\HttpClient;
use Http\Message\Authentication\Bearer;
use Http\Message\MessageFactory;
use Starweb\Api\Authentication\TokenInterface;

class Builder
{
    /**
     * The object that sends HTTP messages.
     *
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var MessageFactory
     */
    private $messageFactory;

    /**
     * @var Plugin[]
     */
    private $plugins = [];

    /**
     * Http headers.
     *
     * @var array
     */
    private $headers = [];

    /**
     * @var bool
     */
    private $useEnhancedHttpClient = false;

    /**
     * @param HttpClient $httpClient
     *
     * @return Builder
     */
    public function setHttpClient(HttpClient $httpClient): Builder
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    /**
     * @param HttpMethodsClient $pluginClient
     *
     * @return Builder
     */
    public function setPluginClient(HttpMethodsClient $pluginClient): Builder
    {
        $this->pluginClient = $pluginClient;

        return $this;
    }

    /**
     * @param MessageFactory $messageFactory
     *
     * @return Builder
     */
    public function setMessageFactory(MessageFactory $messageFactory): Builder
    {
        $this->messageFactory = $messageFactory;

        return $this;
    }

    /**
     * @param Plugin[] $plugins
     *
     * @return Builder
     */
    public function setPlugins(array $plugins): Builder
    {
        $this->plugins = $plugins;

        return $this;
    }

    /**
     * @param bool $useEnhancedHttpClient
     *
     * @return Builder
     */
    public function useEnhancedHttpClient(): Builder
    {
        $this->useEnhancedHttpClient = true;

        return $this;
    }

    /**
     * @return EnhancedHttpClient
     */
    public function build(): EnhancedHttpClient
    {
        $factory = new PluginClientFactory();
        $pluginClient = $factory->createClient($this->httpClient, $this->plugins);
        $client = new EnhancedHttpClient($pluginClient, $this->messageFactory);

        return $client;
    }

    /**
     * Add a new plugin to the end of the plugin chain.
     *
     * @param Plugin $plugin
     *
     * @return Builder
     */
    public function addPlugin(Plugin $plugin): Builder
    {
        $this->plugins[] = $plugin;
        $this->httpClientModified = true;

        return $this;
    }

    /**
     * Remove a plugin by its fully qualified class name (FQCN).
     *
     * @param string $fqcn
     *
     * @return Builder
     */
    public function removePlugin($fqcn): Builder
    {
        foreach ($this->plugins as $idx => $plugin) {
            if ($plugin instanceof $fqcn) {
                unset($this->plugins[$idx]);
                $this->httpClientModified = true;
            }
        }

        return $this;
    }

    /**
     * Clears used headers.
     *
     * @return Builder
     */
    public function clearHeaders(): Builder
    {
        $this->headers = [];

        $this->removePlugin(HeaderAppendPlugin::class);
        $this->addPlugin(new HeaderAppendPlugin($this->headers));

        return $this;
    }

    /**
     * @param array $headers
     *
     * @return Builder
     */
    public function addHeaders(array $headers): Builder
    {
        $this->headers = array_merge($this->headers, $headers);

        $this->removePlugin(HeaderAppendPlugin::class);
        $this->addPlugin(new HeaderAppendPlugin($this->headers));

        return $this;
    }

    /**
     * @param string $header
     * @param string $headerValue
     *
     * @return Builder
     */
    public function addHeaderValue($header, $headerValue): Builder
    {
        if (!isset($this->headers[$header])) {
            $this->headers[$header] = $headerValue;
        } else {
            $this->headers[$header] = array_merge((array) $this->headers[$header], [$headerValue]);
        }

        $this->removePlugin(HeaderAppendPlugin::class);
        $this->addPlugin(new HeaderAppendPlugin($this->headers));

        return $this;
    }

    public function addAuthentication(TokenInterface $token): Builder
    {
        $authentication = new Bearer($token->__toString());
        $this->addPlugin(new AuthenticationPlugin($authentication));

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Starweb\HttpClient;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClientFactory;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Message\MessageFactory;
use Starweb\Api\Authentication\TokenManager;
use Starweb\Api\Client;
use Starweb\HttpClient\Authentication\Bearer;

class Builder
{
    /**
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
     * @var array
     */
    private $headers = [];

    public function setHttpClient(HttpClient $httpClient): Builder
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    private function getHttpClient(): HttpClient
    {
        if (!$this->httpClient) {
            $this->httpClient = HttpClientDiscovery::find();
        }

        return $this->httpClient;
    }

    public function setMessageFactory(MessageFactory $messageFactory): Builder
    {
        $this->messageFactory = $messageFactory;

        return $this;
    }

    public function build(): Client
    {
        $factory = new PluginClientFactory();
        $pluginClient = $factory->createClient($this->getHttpClient(), $this->plugins);

        $client = Client::create($pluginClient);

        return $client;
    }

    public function addPlugin(Plugin $plugin): Builder
    {
        $this->plugins[] = $plugin;

        return $this;
    }

    public function removePlugin($fqcn): Builder
    {
        foreach ($this->plugins as $idx => $plugin) {
            if ($plugin instanceof $fqcn) {
                unset($this->plugins[$idx]);
            }
        }

        return $this;
    }

    public function clearHeaders(): Builder
    {
        $this->headers = [];

        $this->removePlugin(HeaderAppendPlugin::class);
        $this->addPlugin(new HeaderAppendPlugin($this->headers));

        return $this;
    }

    public function addHeaders(array $headers): Builder
    {
        $this->headers = array_merge($this->headers, $headers);

        $this->removePlugin(HeaderAppendPlugin::class);
        $this->addPlugin(new HeaderAppendPlugin($this->headers));

        return $this;
    }

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

    public function addAuthentication(TokenManager $tokenManager): Builder
    {
        $authentication = new Bearer($tokenManager);
        $this->addPlugin(new AuthenticationPlugin($authentication));

        return $this;
    }
}

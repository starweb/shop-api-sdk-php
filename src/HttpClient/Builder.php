<?php declare(strict_types=1);

namespace Starweb\HttpClient;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClientFactory;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\Authentication\Bearer;
use Http\Message\MessageFactory;
use Http\Message\StreamFactory;
use Starweb\Api\Authentication\TokenInterface;
use Starweb\Api\Generated\Normalizer\NormalizerFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

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
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * @var SerializerInterface
     */
    private $serializer;

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
     * @return HttpClient
     */
    private function getHttpClient(): HttpClient
    {
        if (!$this->httpClient) {
            $this->httpClient = HttpClientDiscovery::find();
        }

        return $this->httpClient;
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
     * @return MessageFactory
     */
    private function getMessageFactory(): MessageFactory
    {
        if (!$this->messageFactory) {
            $this->messageFactory = MessageFactoryDiscovery::find();
        }

        return $this->messageFactory;
    }

    /**
     * @param StreamFactory $streamFactory
     *
     * @return Builder
     */
    public function setStreamFactory(StreamFactory $streamFactory): Builder
    {
        $this->streamFactory = $streamFactory;

        return $this;
    }

    /**
     * @return StreamFactory
     */
    private function getStreamFactory(): StreamFactory
    {
        if (!$this->streamFactory) {
            $this->streamFactory = StreamFactoryDiscovery::find();
        }

        return $this->streamFactory;
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer(): SerializerInterface
    {
        if (!$this->serializer) {
            $this->serializer = $this->getDefaultSerializer();
        }

        return $this->serializer;
    }

    private function getDefaultSerializer(): SerializerInterface
    {
        $normalizers = NormalizerFactory::create();
        $encoders = [new JsonEncoder(
            new JsonEncode(),
            new JsonDecode(false))
        ];

        return new Serializer($normalizers, $encoders);
    }

    /**
     * @param SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer): void
    {
        $this->serializer = $serializer;
    }

    /**
     * @return Client
     */
    public function build(): Client
    {
        $factory = new PluginClientFactory();
        $pluginClient = $factory->createClient($this->getHttpClient(), $this->plugins);

        $client = Client::create($pluginClient);

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

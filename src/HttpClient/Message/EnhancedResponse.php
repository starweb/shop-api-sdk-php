<?php

namespace Starweb\HttpClient\Message;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Starweb\Api\Model\CollectionInterface;
use Starweb\Api\Model\ItemInterface;
use Starweb\Exception\InvalidResponseContentException;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Enhanced decorator implementation of the PSR-7 Response interface providing
 * convenience methods to transform the response body into objects.
 *
 * Currently this class uses the Symfony serializer component for deserialization.
 * Deep object deserialization is supported by the
 *
 * @package Starweb\HttpClient\Message
 */
class EnhancedResponse implements ResponseInterface
{
    /**
     * @var ResponseInterface
     */
    private $response;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * EnhancedResponse constructor.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getProtocolVersion()
    {
        return $this->response->getProtocolVersion();
    }

    /**
     * @param string $version
     * @return static
     */
    public function withProtocolVersion($version)
    {
        return $this->response->withProtocolVersion($version);
    }

    /**
     * @return \string[][]
     */
    public function getHeaders()
    {
        return $this->response->getHeaders();
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasHeader($name)
    {
        return $this->response->hasHeader($name);
    }

    /**
     * @param string $name
     * @return string[]
     */
    public function getHeader($name)
    {
        return $this->response->getHeader($name);
    }

    /**
     * @param string $name
     * @return string
     */
    public function getHeaderLine($name)
    {
        return $this->response->getHeaderLine($name);
    }

    /**
     * @param string $name
     * @param string|string[] $value
     * @return static
     */
    public function withHeader($name, $value)
    {
        return $this->response->withHeader($name, $value);
    }

    /**
     * @param string $name
     * @param string|string[] $value
     * @return static
     */
    public function withAddedHeader($name, $value)
    {
        return $this->response->withAddedHeader($name, $value);
    }

    /**
     * @param string $name
     * @return static
     */
    public function withoutHeader($name)
    {
        return $this->response->withoutHeader($name);
    }

    /**
     * @return StreamInterface
     */
    public function getBody()
    {
        return $this->response->getBody();
    }

    /**
     * @param StreamInterface $body
     * @return void|static
     */
    public function withBody(StreamInterface $body)
    {
        $this->response->withBody($body);
    }

    /**
     * @return int|void
     */
    public function getStatusCode()
    {
        $this->response->getStatusCode();
    }

    /**
     * @param int $code
     * @param string $reasonPhrase
     * @return void|static
     */
    public function withStatus($code, $reasonPhrase = '')
    {
        $this->response->withStatus($code, $reasonPhrase);
    }

    /**
     * @return string|void
     */
    public function getReasonPhrase()
    {
        $this->response->getReasonPhrase();
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array|string
     */
    public function getContent()
    {
        $body = $this->getRawContent();
        if (strpos($this->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);

            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }
        }

        return $body;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return ItemInterface|CollectionInterface
     *
     * @throws InvalidResponseContentException
     */
    public function getContentAsModel(string $fqcn = null)
    {
        $body = $this->getRawContent();
        if (strpos($this->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);

            if ($fqcn && class_exists($fqcn) && isset($content)) {
                return $this->getSerializer()->deserialize(json_encode($content), $fqcn, 'json');
            }
        }

        throw new InvalidResponseContentException('response content could not be transformed into a Starweb API model');
    }

    /**
     * @return string
     */
    public function getRawContent(): string
    {
        return $this->getBody()->__toString();
    }

    /**
     * get the serializer,
     *
     * @return Serializer
     */
    private function getSerializer(): Serializer
    {
        if (!$this->serializer) {
            $this->serializer = new Serializer(
                [
                    new ObjectNormalizer(null, null, null, new PhpDocExtractor()),
                    new ArrayDenormalizer()
                ],
                [new JsonEncoder()]);
        }

        return $this->serializer;
    }
}

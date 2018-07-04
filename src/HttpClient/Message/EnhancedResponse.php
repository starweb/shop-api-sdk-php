<?php

namespace Starweb\HttpClient\Message;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Starweb\Api\Model\CollectionInterface;
use Starweb\Api\Model\ItemInterface;
use Starweb\Exception\InvalidResponseContentException;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getProtocolVersion()
    {
        return $this->response->getProtocolVersion();
    }

    public function withProtocolVersion($version)
    {
        return $this->response->withProtocolVersion($version);
    }

    public function getHeaders()
    {
        return $this->response->getHeaders();
    }

    public function hasHeader($name)
    {
        return $this->response->hasHeader($name);
    }

    public function getHeader($name)
    {
        return $this->response->getHeader($name);
    }

    public function getHeaderLine($name)
    {
        return $this->response->getHeaderLine($name);
    }

    public function withHeader($name, $value)
    {
        return $this->response->withHeader($name, $value);
    }

    public function withAddedHeader($name, $value)
    {
        return $this->response->withAddedHeader($name, $value);
    }

    public function withoutHeader($name)
    {
        return $this->response->withoutHeader($name);
    }

    public function getBody()
    {
        return $this->response->getBody();
    }

    public function withBody(StreamInterface $body)
    {
        $this->response->withBody($body);
    }

    public function getStatusCode()
    {
        $this->response->getStatusCode();
    }

    public function withStatus($code, $reasonPhrase = '')
    {
        $this->response->withStatus($code, $reasonPhrase);
    }

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
     * @return Serializer
     */
    private function getSerializer(): Serializer
    {
        if (!$this->serializer) {
            $this->serializer = new Serializer(
                [
                    new ObjectNormalizer(null, null, null, new ReflectionExtractor()),
                    new ArrayDenormalizer()
                ],
                [new JsonEncoder()]);
        }

        return $this->serializer;
    }
}

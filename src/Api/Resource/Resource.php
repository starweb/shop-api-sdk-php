<?php

namespace Starweb\Api\Resource;

use Psr\Http\Message\ResponseInterface;
use Starweb\Api\Model\ModelInterface;
use Starweb\Starweb;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract class Resource implements ResourceInterface
{
    /**
     * @var Starweb
     */
    protected $starweb;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * Resource constructor.
     * @param Starweb $starweb
     */
    public function __construct(Starweb $starweb)
    {
        $this->starweb = $starweb;
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     * @return mixed|string
     * @throws \Http\Client\Exception
     */
    protected function get($path, array $parameters = [], array $requestHeaders = [], $fqcn = null)
    {
        if (count($parameters) > 0) {
            $path .= '?'.http_build_query($parameters);
        }

        $response = $this->starweb->getHttpClient()->get($path, $requestHeaders);

        return $this->getContent($response, $fqcn);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     * @return ResponseInterface
     * @throws \Http\Client\Exception
     */
    protected function head($path, array $parameters = [], array $requestHeaders = [])
    {
        if (array_key_exists('ref', $parameters) && is_null($parameters['ref'])) {
            unset($parameters['ref']);
        }

        $response = $this->starweb->getHttpClient()->head($path.'?'.http_build_query($parameters), $requestHeaders);

        return $response;
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     * @return mixed|string
     * @throws \Http\Client\Exception
     */
    protected function post($path, array $parameters = [], array $requestHeaders = [])
    {
        return $this->postRaw($path, $this->createJsonBody($parameters), $requestHeaders);
    }

    /**
     * @param $path
     * @param $body
     * @param array $requestHeaders
     * @return mixed|string
     * @throws \Http\Client\Exception
     */
    protected function postRaw($path, $body, array $requestHeaders = [])
    {
        $response = $this->starweb->getHttpClient()->post($path, $requestHeaders, $body);

        return $this->getContent($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     * @return mixed|string
     * @throws \Http\Client\Exception
     */
    protected function patch($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->starweb->getHttpClient()->patch($path, $requestHeaders, $this->createJsonBody($parameters));

        return $this->getContent($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed|string
     *
     * @throws \Http\Client\Exception
     */
    protected function put($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->starweb->getHttpClient()->put($path, $requestHeaders, $this->createJsonBody($parameters));

        return $this->getContent($response);
    }

    /**
     * @param $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed|string
     *
     * @throws \Http\Client\Exception
     */
    protected function delete($path, array $parameters = [], array $requestHeaders = [])
    {
        $response = $this->starweb->getHttpClient()->delete($path, $requestHeaders, $this->createJsonBody($parameters));

        return $this->getContent($response);
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function createJsonBody(array $parameters)
    {
        return (count($parameters) === 0) ? null : json_encode($parameters, empty($parameters) ? JSON_FORCE_OBJECT : 0);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return mixed|string
     */
    protected function getContent(ResponseInterface $response, string $fqcn = null)
    {
        $body = $response->getBody()->__toString();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);

            if ($fqcn && class_exists($fqcn)) {
                return $this->getSerializer()->deserialize(json_encode($content['data']), $fqcn, 'json');
            }

            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }
        }

        return $body;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return string
     */
    protected function getRawContent(ResponseInterface $response)
    {
        return $response->getBody()->__toString();
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array|null
     */
    protected function getPagination(ResponseInterface $response)
    {
        if (!$response->hasHeader('Link')) {
            return;
        }

        $header = self::getHeader($response, 'Link');
        $pagination = [];
        foreach (explode(',', $header) as $link) {
            preg_match('/<(.*)>; rel="(.*)"/i', trim($link, ','), $match);

            if (3 === count($match)) {
                $pagination[$match[2]] = $match[1];
            }
        }

        return $pagination;
    }

    /**
     * Get the value for a single header.
     *
     * @param ResponseInterface $response
     * @param string            $name
     *
     * @return string|null
     */
    protected function getHeader(ResponseInterface $response, $name)
    {
        $headers = $response->getHeader($name);

        return array_shift($headers);
    }

    /**
     * @return Serializer
     */
    protected function getSerializer(): Serializer
    {
        if (!$this->serializer) {
            $this->serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
        }

        return $this->serializer;
    }

    protected function deserialize(string $data, string $fqcn): ModelInterface
    {
        return $this->getSerializer()->deserialize($data, $fqcn, 'json');
    }
}

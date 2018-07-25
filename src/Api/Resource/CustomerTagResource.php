<?php

namespace Starweb\Api\Resource;


use Starweb\Api\Model\CustomerTag\CustomerTag;
use Starweb\Api\Model\CustomerTag\CustomerTagCollection;
use Starweb\Api\Model\CustomerTag\CustomerTagItem;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerTagResource extends Resource
{
    /**
     * the base endpoint of this resource
     */
    private const ENDPOINT = '/customers/{customerId}/tags';

    protected function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    protected function getPathParameterResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('customerId');

        return $resolver;
    }

    /**
     * @return CustomerTagCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): CustomerTagCollection
    {
        $response = $this->getClient()->get($this->getResolvedEndpoint());

        return $response->getContentAsModel(CustomerTagCollection::class);
    }

    /**
     * @param CustomerTag $tag
     *
     * @return CustomerTag
     *
     * @throws \Http\Client\Exception
     */
    public function create(CustomerTag $tag): CustomerTag
    {
        $response = $this->getClient()->post($this->getResolvedEndpoint(), $this->getSerializer()->normalize($tag));
        $item = $response->getContentAsModel(CustomerTagItem::class);

        return $item->getData();
    }

    /**
     * @param int $customerId
     * @param int $id
     *
     * @return CustomerTag
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $id): CustomerTag
    {
        $response = $this->getClient()->get(sprintf('%s/%s', $this->getResolvedEndpoint(), $id));
        $item = $response->getContentAsModel(CustomerTagItem::class);

        return $item->getData();
    }

    /**
     * @param int $id
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $id): bool
    {
        $response = $this->getClient()->delete(sprintf('%s/%s', $this->getResolvedEndpoint(), $id));

        return 204 === $response->getStatusCode();
    }

    /**
     * @param CustomerTag $customerTag
     *
     * @return CustomerTag
     *
     * @throws \Http\Client\Exception
     */
    public function replace(CustomerTag $customerTag): CustomerTag
    {
        $response = $this->getClient()->put(
            sprintf('%s/%s', $this->getResolvedEndpoint(), $customerTag->getTagId()),
            $this->getSerializer()->normalize($customerTag)
        );
        $item = $response->getContentAsModel(CustomerTagItem::class);

        return $item->getData();
    }

    /**
     * @param int $id
     * @param CustomerTag $customerTagData
     *
     * @return CustomerTag
     *
     * @throws \Http\Client\Exception
     */
    public function update(int $id, array $customerTagData): CustomerTag
    {
        $response = $this->getClient()->patch(sprintf('%s/%s', $this->getResolvedEndpoint(), $id), $customerTagData);
        $item = $response->getContentAsModel(CustomerTagItem::class);

        return $item->getData();
    }
}

<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\CustomerTag\CustomerTag;
use Starweb\Api\Model\CustomerTag\CustomerTagCollection;
use Starweb\Api\Model\CustomerTag\CustomerTagItem;
use Starweb\Api\Operation\CustomerTag\CreateCustomerTag;
use Starweb\Api\Operation\CustomerTag\DeleteCustomerTag;
use Starweb\Api\Operation\CustomerTag\ListCustomerTags;
use Starweb\Api\Operation\CustomerTag\RetrieveCustomerTag;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerTagResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('customerId');
        $resolver->setAllowedTypes('customerId', 'int');

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
        $response = $this->performOperation(
            new ListCustomerTags($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(CustomerTagCollection::class);
    }

    /**
     * @param int $tagId
     *
     * @return CustomerTag
     *
     * @throws \Http\Client\Exception
     */
    public function create(int $tagId): CustomerTag
    {
        $response = $this->performOperation(
            new CreateCustomerTag(
                $this,
                $this->getSerializer()->normalize(['tagId' => $tagId]),
                $this->getPathParameters())
        );
        $item = $response->getContentAsModel(CustomerTagItem::class);

        return $item->getData();
    }

    /**
     * @param int $tagId
     *
     * @return CustomerTag
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $tagId): CustomerTag
    {
        $pathParameters = array_merge($this->getPathParameters(), ['tagId' => $tagId]);
        $response = $this->performOperation(
            new RetrieveCustomerTag($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(CustomerTagItem::class);

        return $item->getData();
    }

    /**
     * @param int $tagId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $tagId): bool
    {
        $pathParameters = array_merge($this->getPathParameters(), ['tagId' => $tagId]);
        $response = $this->performOperation(
            new DeleteCustomerTag($this, [], $pathParameters)
        );

        return 204 === $response->getStatusCode();
    }
}

<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\OrderComment\OrderCommentCollection;
use Starweb\Api\Model\OrderComment\OrderComment;
use Starweb\Api\Model\OrderComment\OrderCommentItem;
use Starweb\Api\Operation\OrderComment\ListOrderComments;
use Starweb\Api\Operation\OrderComment\RetrieveOrderComment;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderCommentResource extends Resource
{
    public function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('orderId');
        $resolver->setAllowedTypes('orderId', 'int');

        return $resolver;
    }

    /**
     * @return OrderCommentCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): OrderCommentCollection
    {
        $response = $this->performOperation(
            new ListOrderComments($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(OrderCommentCollection::class);
    }

    /**
     * @param int $commentId
     *
     * @return OrderComment
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $commentId): OrderComment
    {
        $pathParameters = array_merge($this->getPathParameters(), ['commentId' => $commentId]);
        $response = $this->performOperation(
            new RetrieveOrderComment($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(OrderCommentItem::class);

        return $item->getData();
    }
}

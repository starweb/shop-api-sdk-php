<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\Tag\Tag;
use Starweb\Api\Model\Tag\TagCollection;
use Starweb\Api\Model\Tag\TagItem;
use Starweb\Api\Operation\Tag\ListTags;
use Starweb\Api\Operation\Tag\RetrieveTag;

class TagResource extends Resource
{
    /**
     * @return TagCollection
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): TagCollection
    {
        $response = $this->performOperation(
            new ListTags($this, [], $this->getPathParameters())
        );

        return $response->getContentAsModel(TagCollection::class);
    }

    /**
     * @param string $tagId
     *
     * @return Tag
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(string $tagId): Tag
    {
        $pathParameters = array_merge($this->getPathParameters(), ['tagId' => $tagId]);
        $response = $this->performOperation(
            new RetrieveTag($this, [], $pathParameters)
        );
        $item = $response->getContentAsModel(TagItem::class);

        return $item->getData();
    }
}

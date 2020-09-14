<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkPostRequestModel
{
    /**
     * The tag option id this product should be listed in
     *
     * @var int|null
     */
    protected $tagOptionId;
    /**
     * The tag option id this product should be listed in
     *
     * @return int|null
     */
    public function getTagOptionId() : ?int
    {
        return $this->tagOptionId;
    }
    /**
     * The tag option id this product should be listed in
     *
     * @param int|null $tagOptionId
     *
     * @return self
     */
    public function setTagOptionId(?int $tagOptionId) : self
    {
        $this->tagOptionId = $tagOptionId;
        return $this;
    }
}
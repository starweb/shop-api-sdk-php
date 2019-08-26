<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkModel
{
    /**
     * The tag option id this product should be listed in
     *
     * @var int
     */
    protected $tagOptionId;
    /**
     * The tag id where the tag option belongs to
     *
     * @var int
     */
    protected $tagId;
    /**
     * The tag option id this product should be listed in
     *
     * @return int
     */
    public function getTagOptionId() : ?int
    {
        return $this->tagOptionId;
    }
    /**
     * The tag option id this product should be listed in
     *
     * @param int $tagOptionId
     *
     * @return self
     */
    public function setTagOptionId(?int $tagOptionId) : self
    {
        $this->tagOptionId = $tagOptionId;
        return $this;
    }
    /**
     * The tag id where the tag option belongs to
     *
     * @return int
     */
    public function getTagId() : ?int
    {
        return $this->tagId;
    }
    /**
     * The tag id where the tag option belongs to
     *
     * @param int $tagId
     *
     * @return self
     */
    public function setTagId(?int $tagId) : self
    {
        $this->tagId = $tagId;
        return $this;
    }
}
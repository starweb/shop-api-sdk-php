<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkModel extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The tag option id this product should be listed in
     *
     * @var int|null
     */
    protected $tagOptionId;
    /**
     * The tag id where the tag option belongs to
     *
     * @var int|null
     */
    protected $tagId;
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
        $this->initialized['tagOptionId'] = true;
        $this->tagOptionId = $tagOptionId;
        return $this;
    }
    /**
     * The tag id where the tag option belongs to
     *
     * @return int|null
     */
    public function getTagId() : ?int
    {
        return $this->tagId;
    }
    /**
     * The tag id where the tag option belongs to
     *
     * @param int|null $tagId
     *
     * @return self
     */
    public function setTagId(?int $tagId) : self
    {
        $this->initialized['tagId'] = true;
        $this->tagId = $tagId;
        return $this;
    }
}
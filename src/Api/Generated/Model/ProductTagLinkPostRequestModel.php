<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLinkPostRequestModel extends \ArrayObject
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
     * @var int
     */
    protected $tagOptionId;
    /**
     * The tag option id this product should be listed in
     *
     * @return int
     */
    public function getTagOptionId() : int
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
    public function setTagOptionId(int $tagOptionId) : self
    {
        $this->initialized['tagOptionId'] = true;
        $this->tagOptionId = $tagOptionId;
        return $this;
    }
}
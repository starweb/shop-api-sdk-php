<?php

namespace Starweb\Api\Generated\Model;

class CustomerTagModel
{
    /**
     * The tag Id
     *
     * @var int|null
     */
    protected $tagId;
    /**
     * The tag name
     *
     * @var string|null
     */
    protected $name;
    /**
     * The tag Id
     *
     * @return int|null
     */
    public function getTagId() : ?int
    {
        return $this->tagId;
    }
    /**
     * The tag Id
     *
     * @param int|null $tagId
     *
     * @return self
     */
    public function setTagId(?int $tagId) : self
    {
        $this->tagId = $tagId;
        return $this;
    }
    /**
     * The tag name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The tag name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}
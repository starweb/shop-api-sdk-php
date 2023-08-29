<?php

namespace Starweb\Api\Generated\Model;

class CustomerTagModel extends \ArrayObject
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
     * The tag Id
     *
     * @var int
     */
    protected $tagId;
    /**
     * The tag name
     *
     * @var string
     */
    protected $name;
    /**
     * The tag Id
     *
     * @return int
     */
    public function getTagId() : int
    {
        return $this->tagId;
    }
    /**
     * The tag Id
     *
     * @param int $tagId
     *
     * @return self
     */
    public function setTagId(int $tagId) : self
    {
        $this->initialized['tagId'] = true;
        $this->tagId = $tagId;
        return $this;
    }
    /**
     * The tag name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The tag name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}
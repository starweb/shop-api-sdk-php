<?php

namespace Starweb\Api\Generated\Model;

class CustomerAddedTagModel extends \ArrayObject
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
     * The id of the tag
     *
     * @var int
     */
    protected $tagId;
    /**
     * The name of the tag
     *
     * @var string
     */
    protected $name;
    /**
     * The id of the tag
     *
     * @return int
     */
    public function getTagId() : int
    {
        return $this->tagId;
    }
    /**
     * The id of the tag
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
     * The name of the tag
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the tag
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
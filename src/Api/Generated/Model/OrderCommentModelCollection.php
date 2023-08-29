<?php

namespace Starweb\Api\Generated\Model;

class OrderCommentModelCollection extends \ArrayObject
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
     * A list of order comments
     *
     * @var OrderCommentModel[]|null
     */
    protected $data;
    /**
     * A list of order comments
     *
     * @return OrderCommentModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of order comments
     *
     * @param OrderCommentModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
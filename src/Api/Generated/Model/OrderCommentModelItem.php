<?php

namespace Starweb\Api\Generated\Model;

class OrderCommentModelItem extends \ArrayObject
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
     * 
     *
     * @var OrderCommentModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return OrderCommentModel|null
     */
    public function getData() : ?OrderCommentModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderCommentModel|null $data
     *
     * @return self
     */
    public function setData(?OrderCommentModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
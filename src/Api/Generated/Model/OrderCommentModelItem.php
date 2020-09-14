<?php

namespace Starweb\Api\Generated\Model;

class OrderCommentModelItem
{
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
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Model\OrderComment;

class OrderCommentItem
{
    /**
     * 
     *
     * @var OrderComment
     */
    protected $data;
    /**
     * 
     *
     * @return OrderComment
     */
    public function getData() : ?OrderComment
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderCommentModel $data
     *
     * @return self
     */
    public function setData(?OrderCommentModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
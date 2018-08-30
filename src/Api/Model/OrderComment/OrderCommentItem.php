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
     * @param OrderComment $data
     *
     * @return self
     */
    public function setData(OrderComment $data) : self
    {
        $this->data = $data;
        return $this;
    }
}

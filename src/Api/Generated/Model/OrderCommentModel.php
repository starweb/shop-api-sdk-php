<?php

namespace Starweb\Api\Generated\Model;

class OrderCommentModel extends \ArrayObject
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
     * The comments id
     *
     * @var int
     */
    protected $commentId;
    /**
     * A timestamp of when the comment was created. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The comment
     *
     * @var string
     */
    protected $text;
    /**
     * The author of the comment. Either ”admin” or ”customer”
     *
     * @var string
     */
    protected $from;
    /**
     * The comments id
     *
     * @return int
     */
    public function getCommentId() : int
    {
        return $this->commentId;
    }
    /**
     * The comments id
     *
     * @param int $commentId
     *
     * @return self
     */
    public function setCommentId(int $commentId) : self
    {
        $this->initialized['commentId'] = true;
        $this->commentId = $commentId;
        return $this;
    }
    /**
     * A timestamp of when the comment was created. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the comment was created. The time should be formatted using ISO-8601
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The comment
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The comment
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * The author of the comment. Either ”admin” or ”customer”
     *
     * @return string
     */
    public function getFrom() : string
    {
        return $this->from;
    }
    /**
     * The author of the comment. Either ”admin” or ”customer”
     *
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from) : self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
}
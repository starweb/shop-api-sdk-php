<?php

namespace Starweb\Api\Generated\Model;

class OrderCommentModel
{
    /**
     * The comments id
     *
     * @var int|null
     */
    protected $commentId;
    /**
     * A timestamp of when the comment was created. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * The comment
     *
     * @var string|null
     */
    protected $text;
    /**
     * The author of the comment. Either ”admin” or ”customer”
     *
     * @var string|null
     */
    protected $from;
    /**
     * The comments id
     *
     * @return int|null
     */
    public function getCommentId() : ?int
    {
        return $this->commentId;
    }
    /**
     * The comments id
     *
     * @param int|null $commentId
     *
     * @return self
     */
    public function setCommentId(?int $commentId) : self
    {
        $this->commentId = $commentId;
        return $this;
    }
    /**
     * A timestamp of when the comment was created. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the comment was created. The time should be formatted using ISO-8601
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The comment
     *
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * The comment
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * The author of the comment. Either ”admin” or ”customer”
     *
     * @return string|null
     */
    public function getFrom() : ?string
    {
        return $this->from;
    }
    /**
     * The author of the comment. Either ”admin” or ”customer”
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from) : self
    {
        $this->from = $from;
        return $this;
    }
}
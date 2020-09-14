<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusModel
{
    /**
     * The id of the order status
     *
     * @var int|null
     */
    protected $statusId;
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @var bool|null
     */
    protected $shouldSendEmail;
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @var string|null
     */
    protected $idCode;
    /**
     * 
     *
     * @var OrderStatusLanguageModelCollection|null
     */
    protected $languages;
    /**
     * The id of the order status
     *
     * @return int|null
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     * The id of the order status
     *
     * @param int|null $statusId
     *
     * @return self
     */
    public function setStatusId(?int $statusId) : self
    {
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @return bool|null
     */
    public function getShouldSendEmail() : ?bool
    {
        return $this->shouldSendEmail;
    }
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @param bool|null $shouldSendEmail
     *
     * @return self
     */
    public function setShouldSendEmail(?bool $shouldSendEmail) : self
    {
        $this->shouldSendEmail = $shouldSendEmail;
        return $this;
    }
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @return string|null
     */
    public function getIdCode() : ?string
    {
        return $this->idCode;
    }
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @param string|null $idCode
     *
     * @return self
     */
    public function setIdCode(?string $idCode) : self
    {
        $this->idCode = $idCode;
        return $this;
    }
    /**
     * 
     *
     * @return OrderStatusLanguageModelCollection|null
     */
    public function getLanguages() : ?OrderStatusLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param OrderStatusLanguageModelCollection|null $languages
     *
     * @return self
     */
    public function setLanguages(?OrderStatusLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusModel extends \ArrayObject
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
     * The id of the order status
     *
     * @var int
     */
    protected $statusId;
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @var bool
     */
    protected $shouldSendEmail;
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @var string
     */
    protected $idCode;
    /**
     * 
     *
     * @var OrderStatusLanguageModel[]
     */
    protected $languages;
    /**
     * The id of the order status
     *
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->statusId;
    }
    /**
     * The id of the order status
     *
     * @param int $statusId
     *
     * @return self
     */
    public function setStatusId(int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @return bool
     */
    public function getShouldSendEmail() : bool
    {
        return $this->shouldSendEmail;
    }
    /**
     * Should an order status update email be sent out when an order gets this status
     *
     * @param bool $shouldSendEmail
     *
     * @return self
     */
    public function setShouldSendEmail(bool $shouldSendEmail) : self
    {
        $this->initialized['shouldSendEmail'] = true;
        $this->shouldSendEmail = $shouldSendEmail;
        return $this;
    }
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @return string
     */
    public function getIdCode() : string
    {
        return $this->idCode;
    }
    /**
     * Standard order statuses has an idCode as well. These are: created, picking, completed, canceled
     *
     * @param string $idCode
     *
     * @return self
     */
    public function setIdCode(string $idCode) : self
    {
        $this->initialized['idCode'] = true;
        $this->idCode = $idCode;
        return $this;
    }
    /**
     * 
     *
     * @return OrderStatusLanguageModel[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param OrderStatusLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}
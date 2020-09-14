<?php

namespace Starweb\Api\Generated\Model;

class WebHookModel
{
    /**
     * The id of the web hook
     *
     * @var int|null
     */
    protected $webHookId;
    /**
     * The name of the web hook
     *
     * @var string|null
     */
    protected $name;
    /**
     * The triggering event. Valid values are product-created, product-updated, product-removed, order-created, order-completed, order-updated, order-deleted, order-status-changed, customer-created, customer-updated, customer-deleted, shop-opened, shop-closed, shop-removed
     *
     * @var string|null
     */
    protected $event;
    /**
     * The id of an order status. Only used with the order-status-changes event.
     *
     * @var int|null
     */
    protected $statusId;
    /**
     * The URL to call when the event triggers
     *
     * @var string|null
     */
    protected $url;
    /**
     * The id of the web hook
     *
     * @return int|null
     */
    public function getWebHookId() : ?int
    {
        return $this->webHookId;
    }
    /**
     * The id of the web hook
     *
     * @param int|null $webHookId
     *
     * @return self
     */
    public function setWebHookId(?int $webHookId) : self
    {
        $this->webHookId = $webHookId;
        return $this;
    }
    /**
     * The name of the web hook
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the web hook
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The triggering event. Valid values are product-created, product-updated, product-removed, order-created, order-completed, order-updated, order-deleted, order-status-changed, customer-created, customer-updated, customer-deleted, shop-opened, shop-closed, shop-removed
     *
     * @return string|null
     */
    public function getEvent() : ?string
    {
        return $this->event;
    }
    /**
     * The triggering event. Valid values are product-created, product-updated, product-removed, order-created, order-completed, order-updated, order-deleted, order-status-changed, customer-created, customer-updated, customer-deleted, shop-opened, shop-closed, shop-removed
     *
     * @param string|null $event
     *
     * @return self
     */
    public function setEvent(?string $event) : self
    {
        $this->event = $event;
        return $this;
    }
    /**
     * The id of an order status. Only used with the order-status-changes event.
     *
     * @return int|null
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     * The id of an order status. Only used with the order-status-changes event.
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
     * The URL to call when the event triggers
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * The URL to call when the event triggers
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}
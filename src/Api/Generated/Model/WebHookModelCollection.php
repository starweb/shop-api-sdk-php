<?php

namespace Starweb\Api\Generated\Model;

class WebHookModelCollection
{
    /**
     * A list of web hooks
     *
     * @var WebHookModel[]|null
     */
    protected $data;
    /**
     * A list of web hooks
     *
     * @return WebHookModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A list of web hooks
     *
     * @param WebHookModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
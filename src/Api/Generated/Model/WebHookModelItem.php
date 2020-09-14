<?php

namespace Starweb\Api\Generated\Model;

class WebHookModelItem
{
    /**
     * 
     *
     * @var WebHookModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return WebHookModel|null
     */
    public function getData() : ?WebHookModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param WebHookModel|null $data
     *
     * @return self
     */
    public function setData(?WebHookModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
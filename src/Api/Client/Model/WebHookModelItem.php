<?php

namespace Starweb\Api\Client\Model;

class WebHookModelItem
{
    /**
     * 
     *
     * @var WebHookModel
     */
    protected $data;
    /**
     * 
     *
     * @return WebHookModel
     */
    public function getData() : ?WebHookModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param WebHookModel $data
     *
     * @return self
     */
    public function setData(?WebHookModel $data) : self
    {
        $this->data = $data;
        return $this;
    }
}
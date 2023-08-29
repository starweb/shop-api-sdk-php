<?php

namespace Starweb\Api\Generated\Model;

class WebHookModelItem extends \ArrayObject
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
    public function getData() : WebHookModel
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
    public function setData(WebHookModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
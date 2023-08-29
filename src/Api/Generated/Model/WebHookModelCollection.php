<?php

namespace Starweb\Api\Generated\Model;

class WebHookModelCollection extends \ArrayObject
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
     * A list of web hooks
     *
     * @var WebHookModel[]
     */
    protected $data;
    /**
     * A list of web hooks
     *
     * @return WebHookModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of web hooks
     *
     * @param WebHookModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
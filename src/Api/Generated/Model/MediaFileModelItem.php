<?php

namespace Starweb\Api\Generated\Model;

class MediaFileModelItem extends \ArrayObject
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
     * @var MediaFileModel|null
     */
    protected $data;
    /**
     * 
     *
     * @return MediaFileModel|null
     */
    public function getData() : ?MediaFileModel
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param MediaFileModel|null $data
     *
     * @return self
     */
    public function setData(?MediaFileModel $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}
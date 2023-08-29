<?php

namespace Starweb\Api\Generated\Model;

class MediaFileModelCollection extends \ArrayObject
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
     * A collection of media files
     *
     * @var MediaFileModel[]
     */
    protected $data;
    /**
     * 
     *
     * @var MediaFileModelCollectionMeta
     */
    protected $meta;
    /**
     * A collection of media files
     *
     * @return MediaFileModel[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A collection of media files
     *
     * @param MediaFileModel[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return MediaFileModelCollectionMeta
     */
    public function getMeta() : MediaFileModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param MediaFileModelCollectionMeta $meta
     *
     * @return self
     */
    public function setMeta(MediaFileModelCollectionMeta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}
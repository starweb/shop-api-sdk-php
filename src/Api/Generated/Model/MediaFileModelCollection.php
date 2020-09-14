<?php

namespace Starweb\Api\Generated\Model;

class MediaFileModelCollection
{
    /**
     * A collection of media files
     *
     * @var MediaFileModel[]|null
     */
    protected $data;
    /**
     * 
     *
     * @var MediaFileModelCollectionMeta|null
     */
    protected $meta;
    /**
     * A collection of media files
     *
     * @return MediaFileModel[]|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * A collection of media files
     *
     * @param MediaFileModel[]|null $data
     *
     * @return self
     */
    public function setData(?array $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return MediaFileModelCollectionMeta|null
     */
    public function getMeta() : ?MediaFileModelCollectionMeta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param MediaFileModelCollectionMeta|null $meta
     *
     * @return self
     */
    public function setMeta(?MediaFileModelCollectionMeta $meta) : self
    {
        $this->meta = $meta;
        return $this;
    }
}
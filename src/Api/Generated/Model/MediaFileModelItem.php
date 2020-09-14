<?php

namespace Starweb\Api\Generated\Model;

class MediaFileModelItem
{
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
        $this->data = $data;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class MediaFileUploadModel
{
    /**
     * 
     *
     * @var string|null
     */
    protected $file;
    /**
     * 
     *
     * @return string|null
     */
    public function getFile() : ?string
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param string|null $file
     *
     * @return self
     */
    public function setFile(?string $file) : self
    {
        $this->file = $file;
        return $this;
    }
}
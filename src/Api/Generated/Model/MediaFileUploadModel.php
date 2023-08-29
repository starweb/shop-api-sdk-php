<?php

namespace Starweb\Api\Generated\Model;

class MediaFileUploadModel extends \ArrayObject
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
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class MediaFileModel extends \ArrayObject
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
     * The media file ID
     *
     * @var int
     */
    protected $mediaFileId;
    /**
     * The name of the media file
     *
     * @var string
     */
    protected $name;
    /**
     * A timestamp of when the media file was created. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $createdAt;
    /**
     * A timestamp of when the media file was modifies. The time should be formatted using ISO-8601
     *
     * @var string
     */
    protected $modifiedAt;
    /**
     * The media files size in bytes
     *
     * @var int
     */
    protected $size;
    /**
     * The media files mime type
     *
     * @var string
     */
    protected $mime;
    /**
     * The media files height in pixels
     *
     * @var int
     */
    protected $height;
    /**
     * The media files width in pixels
     *
     * @var int
     */
    protected $width;
    /**
     * The media files URL
     *
     * @var string
     */
    protected $url;
    /**
     * The media file ID
     *
     * @return int
     */
    public function getMediaFileId() : int
    {
        return $this->mediaFileId;
    }
    /**
     * The media file ID
     *
     * @param int $mediaFileId
     *
     * @return self
     */
    public function setMediaFileId(int $mediaFileId) : self
    {
        $this->initialized['mediaFileId'] = true;
        $this->mediaFileId = $mediaFileId;
        return $this;
    }
    /**
     * The name of the media file
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the media file
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A timestamp of when the media file was created. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the media file was created. The time should be formatted using ISO-8601
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A timestamp of when the media file was modifies. The time should be formatted using ISO-8601
     *
     * @return string
     */
    public function getModifiedAt() : string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the media file was modifies. The time should be formatted using ISO-8601
     *
     * @param string $modifiedAt
     *
     * @return self
     */
    public function setModifiedAt(string $modifiedAt) : self
    {
        $this->initialized['modifiedAt'] = true;
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
    /**
     * The media files size in bytes
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * The media files size in bytes
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The media files mime type
     *
     * @return string
     */
    public function getMime() : string
    {
        return $this->mime;
    }
    /**
     * The media files mime type
     *
     * @param string $mime
     *
     * @return self
     */
    public function setMime(string $mime) : self
    {
        $this->initialized['mime'] = true;
        $this->mime = $mime;
        return $this;
    }
    /**
     * The media files height in pixels
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * The media files height in pixels
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * The media files width in pixels
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * The media files width in pixels
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * The media files URL
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The media files URL
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}
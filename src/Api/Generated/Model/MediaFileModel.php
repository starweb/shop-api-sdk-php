<?php

namespace Starweb\Api\Generated\Model;

class MediaFileModel
{
    /**
     * The media file ID
     *
     * @var int|null
     */
    protected $mediaFileId;
    /**
     * The name of the media file
     *
     * @var string|null
     */
    protected $name;
    /**
     * A timestamp of when the media file was created. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * A timestamp of when the media file was modifies. The time should be formatted using ISO-8601
     *
     * @var string|null
     */
    protected $modifiedAt;
    /**
     * The media files size in bytes
     *
     * @var int|null
     */
    protected $size;
    /**
     * The media files mime type
     *
     * @var string|null
     */
    protected $mime;
    /**
     * The media files height in pixels
     *
     * @var int|null
     */
    protected $height;
    /**
     * The media files width in pixels
     *
     * @var int|null
     */
    protected $width;
    /**
     * The media files URL
     *
     * @var string|null
     */
    protected $url;
    /**
     * The media file ID
     *
     * @return int|null
     */
    public function getMediaFileId() : ?int
    {
        return $this->mediaFileId;
    }
    /**
     * The media file ID
     *
     * @param int|null $mediaFileId
     *
     * @return self
     */
    public function setMediaFileId(?int $mediaFileId) : self
    {
        $this->mediaFileId = $mediaFileId;
        return $this;
    }
    /**
     * The name of the media file
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the media file
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * A timestamp of when the media file was created. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * A timestamp of when the media file was created. The time should be formatted using ISO-8601
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * A timestamp of when the media file was modifies. The time should be formatted using ISO-8601
     *
     * @return string|null
     */
    public function getModifiedAt() : ?string
    {
        return $this->modifiedAt;
    }
    /**
     * A timestamp of when the media file was modifies. The time should be formatted using ISO-8601
     *
     * @param string|null $modifiedAt
     *
     * @return self
     */
    public function setModifiedAt(?string $modifiedAt) : self
    {
        $this->modifiedAt = $modifiedAt;
        return $this;
    }
    /**
     * The media files size in bytes
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * The media files size in bytes
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * The media files mime type
     *
     * @return string|null
     */
    public function getMime() : ?string
    {
        return $this->mime;
    }
    /**
     * The media files mime type
     *
     * @param string|null $mime
     *
     * @return self
     */
    public function setMime(?string $mime) : self
    {
        $this->mime = $mime;
        return $this;
    }
    /**
     * The media files height in pixels
     *
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * The media files height in pixels
     *
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * The media files width in pixels
     *
     * @return int|null
     */
    public function getWidth() : ?int
    {
        return $this->width;
    }
    /**
     * The media files width in pixels
     *
     * @param int|null $width
     *
     * @return self
     */
    public function setWidth(?int $width) : self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * The media files URL
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * The media files URL
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
}
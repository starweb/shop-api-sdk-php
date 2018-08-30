<?php

namespace Starweb\Api\Model\MediaFile;

use Starweb\Api\Model\Meta\Meta;
use Starweb\Api\Model\PaginatedCollectionInterface;

class MediaFileCollection implements PaginatedCollectionInterface
{
    /**
     * A collection of media files
     *
     * @var MediaFile[]
     */
    protected $data;

    /**
     * @var Meta
     */
    protected $meta;

    /**
     * A collection of media files
     *
     * @return MediaFile[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * A collection of media files
     *
     * @param MediaFile[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return Meta
     */
    public function getMeta(): Meta
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     *
     * @return self
     */
    public function setMeta(Meta $meta): self
    {
        $this->meta = $meta;

        return $this;
    }
}

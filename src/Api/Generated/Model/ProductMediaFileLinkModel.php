<?php

namespace Starweb\Api\Generated\Model;

class ProductMediaFileLinkModel
{
    /**
     * This links ID
     *
     * @var int|null
     */
    protected $productMediaFileId;
    /**
     * The media file this link points to. You can fetch available media files from the /media-files endpoint
     *
     * @var int|null
     */
    protected $mediaFileId;
    /**
     * The sort index of these media file links. Note that after the item is saved the sort index will be rearranged so that the item with the lowest sort index always get sort index 0, the next one 1, and so on.
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * The type of file this link points to. Can be either ”image” or ”document”
     *
     * @var string|null
     */
    protected $type;
    /**
     * This links ID
     *
     * @return int|null
     */
    public function getProductMediaFileId() : ?int
    {
        return $this->productMediaFileId;
    }
    /**
     * This links ID
     *
     * @param int|null $productMediaFileId
     *
     * @return self
     */
    public function setProductMediaFileId(?int $productMediaFileId) : self
    {
        $this->productMediaFileId = $productMediaFileId;
        return $this;
    }
    /**
     * The media file this link points to. You can fetch available media files from the /media-files endpoint
     *
     * @return int|null
     */
    public function getMediaFileId() : ?int
    {
        return $this->mediaFileId;
    }
    /**
     * The media file this link points to. You can fetch available media files from the /media-files endpoint
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
     * The sort index of these media file links. Note that after the item is saved the sort index will be rearranged so that the item with the lowest sort index always get sort index 0, the next one 1, and so on.
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of these media file links. Note that after the item is saved the sort index will be rearranged so that the item with the lowest sort index always get sort index 0, the next one 1, and so on.
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * The type of file this link points to. Can be either ”image” or ”document”
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The type of file this link points to. Can be either ”image” or ”document”
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
}
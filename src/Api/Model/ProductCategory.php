<?php

namespace Starweb\Api\Model;

class ProductCategory extends Model
{
    private $parentId;
    private $visibility;
    private $sortIndex;
    private $openPage;
    private $imageFileId;
    private $externalType;
    private $externalId;

    private $categoryId;
    private $hasChildren;

    public function getId(): int
    {
        return $this->categoryId;
    }

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param mixed $parentId
     */
    public function setParentId($parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param mixed $visibility
     */
    public function setVisibility($visibility): void
    {
        $this->visibility = $visibility;
    }

    /**
     * @return mixed
     */
    public function getSortIndex()
    {
        return $this->sortIndex;
    }

    /**
     * @param mixed $sortIndex
     */
    public function setSortIndex($sortIndex): void
    {
        $this->sortIndex = $sortIndex;
    }

    /**
     * @return mixed
     */
    public function getOpenPage()
    {
        return $this->openPage;
    }

    /**
     * @param mixed $openPage
     */
    public function setOpenPage($openPage): void
    {
        $this->openPage = $openPage;
    }

    /**
     * @return mixed
     */
    public function getImageFileId()
    {
        return $this->imageFileId;
    }

    /**
     * @param mixed $imageFileId
     */
    public function setImageFileId($imageFileId): void
    {
        $this->imageFileId = $imageFileId;
    }

    /**
     * @return mixed
     */
    public function getExternalType()
    {
        return $this->externalType;
    }

    /**
     * @param mixed $externalType
     */
    public function setExternalType($externalType): void
    {
        $this->externalType = $externalType;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param mixed $externalId
     */
    public function setExternalId($externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getHasChildren()
    {
        return $this->hasChildren;
    }

    /**
     * @param mixed $hasChildren
     */
    public function setHasChildren($hasChildren): void
    {
        $this->hasChildren = $hasChildren;
    }


}

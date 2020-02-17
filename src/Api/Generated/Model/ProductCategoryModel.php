<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryModel
{
    /**
     * The product category Id
     *
     * @var int
     */
    protected $categoryId;
    /**
     * The category`s parent`s Id
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @var string
     */
    protected $visibility;
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @var bool
     */
    protected $openPage;
    /**
     * The Id to the category`s image file. Has to be an existing mediaFile
     *
     * @var int|null
     */
    protected $imageFileId;
    /**
     * The external Id for this category for the system named in externalType
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * Deprecated: use `externalIdType` instead
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $externalType;
    /**
     * The system name the externalId belongs to.
     *
     * @var string|null
     */
    protected $externalIdType;
    /**
     * Whether or not the category has any children categories
     *
     * @var bool
     */
    protected $hasChildren;
    /**
     * 
     *
     * @var ProductCategoryLanguagesModelCollection
     */
    protected $languages;
    /**
     * The product category Id
     *
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    /**
     * The product category Id
     *
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId) : self
    {
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * The category`s parent`s Id
     *
     * @return int|null
     */
    public function getParentId() : ?int
    {
        return $this->parentId;
    }
    /**
     * The category`s parent`s Id
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @return string
     */
    public function getVisibility() : string
    {
        return $this->visibility;
    }
    /**
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @param string $visibility
     *
     * @return self
     */
    public function setVisibility(string $visibility) : self
    {
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @return int
     */
    public function getSortIndex() : int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @param int $sortIndex
     *
     * @return self
     */
    public function setSortIndex(int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @return bool
     */
    public function getOpenPage() : bool
    {
        return $this->openPage;
    }
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @param bool $openPage
     *
     * @return self
     */
    public function setOpenPage(bool $openPage) : self
    {
        $this->openPage = $openPage;
        return $this;
    }
    /**
     * The Id to the category`s image file. Has to be an existing mediaFile
     *
     * @return int|null
     */
    public function getImageFileId() : ?int
    {
        return $this->imageFileId;
    }
    /**
     * The Id to the category`s image file. Has to be an existing mediaFile
     *
     * @param int|null $imageFileId
     *
     * @return self
     */
    public function setImageFileId(?int $imageFileId) : self
    {
        $this->imageFileId = $imageFileId;
        return $this;
    }
    /**
     * The external Id for this category for the system named in externalType
     *
     * @return string|null
     */
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * The external Id for this category for the system named in externalType
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * Deprecated: use `externalIdType` instead
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getExternalType() : ?string
    {
        return $this->externalType;
    }
    /**
     * Deprecated: use `externalIdType` instead
     *
     * @param string|null $externalType
     *
     * @deprecated
     *
     * @return self
     */
    public function setExternalType(?string $externalType) : self
    {
        $this->externalType = $externalType;
        return $this;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @return string|null
     */
    public function getExternalIdType() : ?string
    {
        return $this->externalIdType;
    }
    /**
     * The system name the externalId belongs to.
     *
     * @param string|null $externalIdType
     *
     * @return self
     */
    public function setExternalIdType(?string $externalIdType) : self
    {
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * Whether or not the category has any children categories
     *
     * @return bool
     */
    public function getHasChildren() : bool
    {
        return $this->hasChildren;
    }
    /**
     * Whether or not the category has any children categories
     *
     * @param bool $hasChildren
     *
     * @return self
     */
    public function setHasChildren(bool $hasChildren) : self
    {
        $this->hasChildren = $hasChildren;
        return $this;
    }
    /**
     * 
     *
     * @return ProductCategoryLanguagesModelCollection
     */
    public function getLanguages() : ProductCategoryLanguagesModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductCategoryLanguagesModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(ProductCategoryLanguagesModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryModelUpdatable extends \ArrayObject
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
     * The product category Id
     *
     * @var int|null
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
     * @var string|null
     */
    protected $visibility;
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @var bool|null
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
     * @var bool|null
     */
    protected $hasChildren;
    /**
     * 
     *
     * @var ProductCategoryLanguagesModel[]|null
     */
    protected $languages;
    /**
     * The product category Id
     *
     * @return int|null
     */
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
    }
    /**
     * The product category Id
     *
     * @param int|null $categoryId
     *
     * @return self
     */
    public function setCategoryId(?int $categoryId) : self
    {
        $this->initialized['categoryId'] = true;
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
        $this->initialized['parentId'] = true;
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @return string|null
     */
    public function getVisibility() : ?string
    {
        return $this->visibility;
    }
    /**
     * The category`s visibility settings. Possible values are: visible, hidden and pricelists. Pricelists means that the category is only visible for customers with access to specific pricelists
     *
     * @param string|null $visibility
     *
     * @return self
     */
    public function setVisibility(?string $visibility) : self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * Sort index. A category with a lower value is displayed higher up in lists
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->initialized['sortIndex'] = true;
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @return bool|null
     */
    public function getOpenPage() : ?bool
    {
        return $this->openPage;
    }
    /**
     * Whether or not links to the category should open a category page listing its products and sub categories on click.
     *
     * @param bool|null $openPage
     *
     * @return self
     */
    public function setOpenPage(?bool $openPage) : self
    {
        $this->initialized['openPage'] = true;
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
        $this->initialized['imageFileId'] = true;
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
        $this->initialized['externalId'] = true;
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
        $this->initialized['externalType'] = true;
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
        $this->initialized['externalIdType'] = true;
        $this->externalIdType = $externalIdType;
        return $this;
    }
    /**
     * Whether or not the category has any children categories
     *
     * @return bool|null
     */
    public function getHasChildren() : ?bool
    {
        return $this->hasChildren;
    }
    /**
     * Whether or not the category has any children categories
     *
     * @param bool|null $hasChildren
     *
     * @return self
     */
    public function setHasChildren(?bool $hasChildren) : self
    {
        $this->initialized['hasChildren'] = true;
        $this->hasChildren = $hasChildren;
        return $this;
    }
    /**
     * 
     *
     * @return ProductCategoryLanguagesModel[]|null
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductCategoryLanguagesModel[]|null $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}
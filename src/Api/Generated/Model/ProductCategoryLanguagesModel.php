<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryLanguagesModel
{
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports. (required)
     *
     * @var string|null
     */
    protected $langCode;
    /**
     * The name of this product category (required)
     *
     * @var string|null
     */
    protected $name;
    /**
     * The page title for this product category
     *
     * @var string|null
     */
    protected $pageTitle;
    /**
     * The main/top description of this product category
     *
     * @var string|null
     */
    protected $description;
    /**
     * The extra/bottom description of this product category
     *
     * @var string|null
     */
    protected $bottomDescription;
    /**
     * The page meta data description of this product category
     *
     * @var string|null
     */
    protected $pageMetaDescription;
    /**
     * The permalink to this product category. Will auto generate if left out
     *
     * @var string|null
     */
    protected $permalink;
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports. (required)
     *
     * @return string|null
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop supports. (required)
     *
     * @param string|null $langCode
     *
     * @return self
     */
    public function setLangCode(?string $langCode) : self
    {
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * The name of this product category (required)
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this product category (required)
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
     * The page title for this product category
     *
     * @return string|null
     */
    public function getPageTitle() : ?string
    {
        return $this->pageTitle;
    }
    /**
     * The page title for this product category
     *
     * @param string|null $pageTitle
     *
     * @return self
     */
    public function setPageTitle(?string $pageTitle) : self
    {
        $this->pageTitle = $pageTitle;
        return $this;
    }
    /**
     * The main/top description of this product category
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * The main/top description of this product category
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * The extra/bottom description of this product category
     *
     * @return string|null
     */
    public function getBottomDescription() : ?string
    {
        return $this->bottomDescription;
    }
    /**
     * The extra/bottom description of this product category
     *
     * @param string|null $bottomDescription
     *
     * @return self
     */
    public function setBottomDescription(?string $bottomDescription) : self
    {
        $this->bottomDescription = $bottomDescription;
        return $this;
    }
    /**
     * The page meta data description of this product category
     *
     * @return string|null
     */
    public function getPageMetaDescription() : ?string
    {
        return $this->pageMetaDescription;
    }
    /**
     * The page meta data description of this product category
     *
     * @param string|null $pageMetaDescription
     *
     * @return self
     */
    public function setPageMetaDescription(?string $pageMetaDescription) : self
    {
        $this->pageMetaDescription = $pageMetaDescription;
        return $this;
    }
    /**
     * The permalink to this product category. Will auto generate if left out
     *
     * @return string|null
     */
    public function getPermalink() : ?string
    {
        return $this->permalink;
    }
    /**
     * The permalink to this product category. Will auto generate if left out
     *
     * @param string|null $permalink
     *
     * @return self
     */
    public function setPermalink(?string $permalink) : self
    {
        $this->permalink = $permalink;
        return $this;
    }
}
<?php

namespace Starweb\Api\Generated\Model;

class ProductLanguageModel extends \ArrayObject
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
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @var string
     */
    protected $langCode;
    /**
     * The products name
     *
     * @var string
     */
    protected $name;
    /**
     * The products short description
     *
     * @var string
     */
    protected $shortDescription;
    /**
     * The products long description
     *
     * @var string
     */
    protected $longDescription;
    /**
     * The permalink for this product and language
     *
     * @var string
     */
    protected $permalink;
    /**
     * The page title for this product
     *
     * @var string
     */
    protected $pageTitle;
    /**
     * The meta description for this product
     *
     * @var string
     */
    protected $pageMetaDescription;
    /**
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @return string
     */
    public function getLangCode() : string
    {
        return $this->langCode;
    }
    /**
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @param string $langCode
     *
     * @return self
     */
    public function setLangCode(string $langCode) : self
    {
        $this->initialized['langCode'] = true;
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * The products name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The products name
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
     * The products short description
     *
     * @return string
     */
    public function getShortDescription() : string
    {
        return $this->shortDescription;
    }
    /**
     * The products short description
     *
     * @param string $shortDescription
     *
     * @return self
     */
    public function setShortDescription(string $shortDescription) : self
    {
        $this->initialized['shortDescription'] = true;
        $this->shortDescription = $shortDescription;
        return $this;
    }
    /**
     * The products long description
     *
     * @return string
     */
    public function getLongDescription() : string
    {
        return $this->longDescription;
    }
    /**
     * The products long description
     *
     * @param string $longDescription
     *
     * @return self
     */
    public function setLongDescription(string $longDescription) : self
    {
        $this->initialized['longDescription'] = true;
        $this->longDescription = $longDescription;
        return $this;
    }
    /**
     * The permalink for this product and language
     *
     * @return string
     */
    public function getPermalink() : string
    {
        return $this->permalink;
    }
    /**
     * The permalink for this product and language
     *
     * @param string $permalink
     *
     * @return self
     */
    public function setPermalink(string $permalink) : self
    {
        $this->initialized['permalink'] = true;
        $this->permalink = $permalink;
        return $this;
    }
    /**
     * The page title for this product
     *
     * @return string
     */
    public function getPageTitle() : string
    {
        return $this->pageTitle;
    }
    /**
     * The page title for this product
     *
     * @param string $pageTitle
     *
     * @return self
     */
    public function setPageTitle(string $pageTitle) : self
    {
        $this->initialized['pageTitle'] = true;
        $this->pageTitle = $pageTitle;
        return $this;
    }
    /**
     * The meta description for this product
     *
     * @return string
     */
    public function getPageMetaDescription() : string
    {
        return $this->pageMetaDescription;
    }
    /**
     * The meta description for this product
     *
     * @param string $pageMetaDescription
     *
     * @return self
     */
    public function setPageMetaDescription(string $pageMetaDescription) : self
    {
        $this->initialized['pageMetaDescription'] = true;
        $this->pageMetaDescription = $pageMetaDescription;
        return $this;
    }
}
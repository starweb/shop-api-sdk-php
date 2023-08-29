<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodLanguageModel extends \ArrayObject
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
     * Language code
     *
     * @var string
     */
    protected $langCode;
    /**
     * Name of shipping method
     *
     * @var string
     */
    protected $name;
    /**
     * Title of shipping method
     *
     * @var string
     */
    protected $title;
    /**
     * A shorter informative description
     *
     * @var string
     */
    protected $shortDescription;
    /**
     * Language code
     *
     * @return string
     */
    public function getLangCode() : string
    {
        return $this->langCode;
    }
    /**
     * Language code
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
     * Name of shipping method
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of shipping method
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
     * Title of shipping method
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of shipping method
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * A shorter informative description
     *
     * @return string
     */
    public function getShortDescription() : string
    {
        return $this->shortDescription;
    }
    /**
     * A shorter informative description
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
}
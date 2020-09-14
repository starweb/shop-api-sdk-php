<?php

namespace Starweb\Api\Generated\Model;

class ShippingMethodLanguageModel
{
    /**
     * Language code
     *
     * @var string|null
     */
    protected $langCode;
    /**
     * Name of shipping method
     *
     * @var string|null
     */
    protected $name;
    /**
     * Title of shipping method
     *
     * @var string|null
     */
    protected $title;
    /**
     * A shorter informative description
     *
     * @var string|null
     */
    protected $shortDescription;
    /**
     * Language code
     *
     * @return string|null
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * Language code
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
     * Name of shipping method
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of shipping method
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
     * Title of shipping method
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * Title of shipping method
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * A shorter informative description
     *
     * @return string|null
     */
    public function getShortDescription() : ?string
    {
        return $this->shortDescription;
    }
    /**
     * A shorter informative description
     *
     * @param string|null $shortDescription
     *
     * @return self
     */
    public function setShortDescription(?string $shortDescription) : self
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }
}
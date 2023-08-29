<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeValueLanguageModel extends \ArrayObject
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
     * @var string|null
     */
    protected $langCode;
    /**
     * The name of this attribute value
     *
     * @var string|null
     */
    protected $name;
    /**
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @return string|null
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The langCode for this language. Supported language codes are: sv, en, ar, no, da, fi, de, fr, es
     *
     * @param string|null $langCode
     *
     * @return self
     */
    public function setLangCode(?string $langCode) : self
    {
        $this->initialized['langCode'] = true;
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * The name of this attribute value
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this attribute value
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}
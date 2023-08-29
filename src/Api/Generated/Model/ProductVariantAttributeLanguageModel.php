<?php

namespace Starweb\Api\Generated\Model;

class ProductVariantAttributeLanguageModel extends \ArrayObject
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
     * The name of this attribute
     *
     * @var string
     */
    protected $name;
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
     * The name of this attribute
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of this attribute
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
}
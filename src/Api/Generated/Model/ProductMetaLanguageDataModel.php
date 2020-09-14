<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaLanguageDataModel
{
    /**
     * The langCode for this language
     *
     * @var string|null
     */
    protected $langCode;
    /**
     * The value for this meta data
     *
     * @var string|null
     */
    protected $value;
    /**
     * The langCode for this language
     *
     * @return string|null
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The langCode for this language
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
     * The value for this meta data
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value for this meta data
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
}
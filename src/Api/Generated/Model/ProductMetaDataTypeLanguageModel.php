<?php

namespace Starweb\Api\Generated\Model;

class ProductMetaDataTypeLanguageModel
{
    /**
     * The language code for this language
     *
     * @var string
     */
    protected $langCode;
    /**
     * The name of this meta data type
     *
     * @var string
     */
    protected $name;
    /**
     * The language code for this language
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The language code for this language
     *
     * @param string $langCode
     *
     * @return self
     */
    public function setLangCode(?string $langCode) : self
    {
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * The name of this meta data type
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this meta data type
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}
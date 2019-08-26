<?php

namespace Starweb\Api\Generated\Model;

class ProductTagLanguageModel
{
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop has setup. 
     *
     * @var string
     */
    protected $langCode;
    /**
     * The name of this product tag
     *
     * @var string
     */
    protected $name;
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop has setup. 
     *
     * @return string
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop has setup. 
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
     * The name of this product tag
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this product tag
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
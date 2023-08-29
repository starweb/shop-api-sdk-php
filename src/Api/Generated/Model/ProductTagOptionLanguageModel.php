<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionLanguageModel extends \ArrayObject
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
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop has setup. 
     *
     * @var string
     */
    protected $langCode;
    /**
     * The value of this product tag option
     *
     * @var string
     */
    protected $value;
    /**
     * Language Code (ISO 639-1) for this translation. Has to be a valid lang code that the shop has setup. 
     *
     * @return string
     */
    public function getLangCode() : string
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
    public function setLangCode(string $langCode) : self
    {
        $this->initialized['langCode'] = true;
        $this->langCode = $langCode;
        return $this;
    }
    /**
     * The value of this product tag option
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value of this product tag option
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}
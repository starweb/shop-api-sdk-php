<?php

namespace Starweb\Api\Generated\Model;

class OrderStatusLanguageModel extends \ArrayObject
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
     * The name of this order status
     *
     * @var string
     */
    protected $name;
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
     * The name of this order status
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of this order status
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
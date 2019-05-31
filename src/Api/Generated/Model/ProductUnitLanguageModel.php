<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitLanguageModel
{
    /**
     * The language code for this language
     *
     * @var string
     */
    protected $langCode;
    /**
     * The name of this unit type
     *
     * @var string
     */
    protected $name;
    /**
     * The symbol to use when counting this unit. For example ”pcs.”
     *
     * @var string
     */
    protected $symbol;
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
     * The name of this unit type
     *
     * @return string
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this unit type
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
    /**
     * The symbol to use when counting this unit. For example ”pcs.”
     *
     * @return string
     */
    public function getSymbol() : ?string
    {
        return $this->symbol;
    }
    /**
     * The symbol to use when counting this unit. For example ”pcs.”
     *
     * @param string $symbol
     *
     * @return self
     */
    public function setSymbol(?string $symbol) : self
    {
        $this->symbol = $symbol;
        return $this;
    }
}
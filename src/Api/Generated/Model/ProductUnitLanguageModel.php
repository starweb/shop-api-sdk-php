<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitLanguageModel
{
    /**
     * The language code for this language
     *
     * @var string|null
     */
    protected $langCode;
    /**
     * The name of this unit type
     *
     * @var string|null
     */
    protected $name;
    /**
     * The symbol to use when counting this unit. For example ”pcs.”
     *
     * @var string|null
     */
    protected $symbol;
    /**
     * The language code for this language
     *
     * @return string|null
     */
    public function getLangCode() : ?string
    {
        return $this->langCode;
    }
    /**
     * The language code for this language
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
     * The name of this unit type
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of this unit type
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
     * The symbol to use when counting this unit. For example ”pcs.”
     *
     * @return string|null
     */
    public function getSymbol() : ?string
    {
        return $this->symbol;
    }
    /**
     * The symbol to use when counting this unit. For example ”pcs.”
     *
     * @param string|null $symbol
     *
     * @return self
     */
    public function setSymbol(?string $symbol) : self
    {
        $this->symbol = $symbol;
        return $this;
    }
}
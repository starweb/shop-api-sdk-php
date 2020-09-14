<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionPutRequestModel
{
    /**
     * The sort index of the option
     *
     * @var int|null
     */
    protected $sortIndex;
    /**
     * 
     *
     * @var ProductTagOptionLanguageModel[]|null
     */
    protected $languages;
    /**
     * The sort index of the option
     *
     * @return int|null
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of the option
     *
     * @param int|null $sortIndex
     *
     * @return self
     */
    public function setSortIndex(?int $sortIndex) : self
    {
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * 
     *
     * @return ProductTagOptionLanguageModel[]|null
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductTagOptionLanguageModel[]|null $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
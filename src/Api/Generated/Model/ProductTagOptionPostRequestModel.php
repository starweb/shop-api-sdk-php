<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionPostRequestModel
{
    /**
     * The sort index of the option
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * 
     *
     * @var ProductTagOptionLanguageModel[]
     */
    protected $languages;
    /**
     * The sort index of the option
     *
     * @return int
     */
    public function getSortIndex() : ?int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index of the option
     *
     * @param int $sortIndex
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
     * @return ProductTagOptionLanguageModel[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductTagOptionLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
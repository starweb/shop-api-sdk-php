<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionPutRequestModel extends \ArrayObject
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
    public function getSortIndex() : int
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
    public function setSortIndex(int $sortIndex) : self
    {
        $this->initialized['sortIndex'] = true;
        $this->sortIndex = $sortIndex;
        return $this;
    }
    /**
     * 
     *
     * @return ProductTagOptionLanguageModel[]
     */
    public function getLanguages() : array
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
    public function setLanguages(array $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}
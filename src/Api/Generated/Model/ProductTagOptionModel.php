<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionModel
{
    /**
     * The option Id
     *
     * @var int
     */
    protected $tagOptionId;
    /**
     * The option value type. This will be only set if the tag type is set to `boolean`. The values for tag of type `option` are stored in the nested language objects.
     *
     * @var bool
     */
    protected $value;
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
     * The option Id
     *
     * @return int
     */
    public function getTagOptionId() : int
    {
        return $this->tagOptionId;
    }
    /**
     * The option Id
     *
     * @param int $tagOptionId
     *
     * @return self
     */
    public function setTagOptionId(int $tagOptionId) : self
    {
        $this->tagOptionId = $tagOptionId;
        return $this;
    }
    /**
     * The option value type. This will be only set if the tag type is set to `boolean`. The values for tag of type `option` are stored in the nested language objects.
     *
     * @return bool
     */
    public function getValue() : bool
    {
        return $this->value;
    }
    /**
     * The option value type. This will be only set if the tag type is set to `boolean`. The values for tag of type `option` are stored in the nested language objects.
     *
     * @param bool $value
     *
     * @return self
     */
    public function setValue(bool $value) : self
    {
        $this->value = $value;
        return $this;
    }
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
        $this->languages = $languages;
        return $this;
    }
}
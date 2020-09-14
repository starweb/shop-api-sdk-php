<?php

namespace Starweb\Api\Generated\Model;

class ProductTagOptionModel
{
    /**
     * The option Id
     *
     * @var int|null
     */
    protected $tagOptionId;
    /**
     * The option value type. This will be only set if the tag type is set to `boolean`. The values for tag of type `option` are stored in the nested language objects.
     *
     * @var bool|null
     */
    protected $value;
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
     * The option Id
     *
     * @return int|null
     */
    public function getTagOptionId() : ?int
    {
        return $this->tagOptionId;
    }
    /**
     * The option Id
     *
     * @param int|null $tagOptionId
     *
     * @return self
     */
    public function setTagOptionId(?int $tagOptionId) : self
    {
        $this->tagOptionId = $tagOptionId;
        return $this;
    }
    /**
     * The option value type. This will be only set if the tag type is set to `boolean`. The values for tag of type `option` are stored in the nested language objects.
     *
     * @return bool|null
     */
    public function getValue() : ?bool
    {
        return $this->value;
    }
    /**
     * The option value type. This will be only set if the tag type is set to `boolean`. The values for tag of type `option` are stored in the nested language objects.
     *
     * @param bool|null $value
     *
     * @return self
     */
    public function setValue(?bool $value) : self
    {
        $this->value = $value;
        return $this;
    }
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
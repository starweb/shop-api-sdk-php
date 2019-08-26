<?php

namespace Starweb\Api\Generated\Model;

class ProductTagModel
{
    /**
     * The tag Id
     *
     * @var int
     */
    protected $tagId;
    /**
     * The tag type
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var ProductTagLanguageModel[]
     */
    protected $languages;
    /**
     * The tag Id
     *
     * @return int
     */
    public function getTagId() : ?int
    {
        return $this->tagId;
    }
    /**
     * The tag Id
     *
     * @param int $tagId
     *
     * @return self
     */
    public function setTagId(?int $tagId) : self
    {
        $this->tagId = $tagId;
        return $this;
    }
    /**
     * The tag type
     *
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The tag type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return ProductTagLanguageModel[]
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductTagLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
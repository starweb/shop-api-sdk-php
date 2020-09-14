<?php

namespace Starweb\Api\Generated\Model;

class ProductTagModel
{
    /**
     * The tag Id
     *
     * @var int|null
     */
    protected $tagId;
    /**
     * The tag type
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var ProductTagLanguageModel[]|null
     */
    protected $languages;
    /**
     * The tag Id
     *
     * @return int|null
     */
    public function getTagId() : ?int
    {
        return $this->tagId;
    }
    /**
     * The tag Id
     *
     * @param int|null $tagId
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
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * The tag type
     *
     * @param string|null $type
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
     * @return ProductTagLanguageModel[]|null
     */
    public function getLanguages() : ?array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductTagLanguageModel[]|null $languages
     *
     * @return self
     */
    public function setLanguages(?array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
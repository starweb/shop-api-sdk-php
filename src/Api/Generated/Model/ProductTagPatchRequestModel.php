<?php

namespace Starweb\Api\Generated\Model;

class ProductTagPatchRequestModel extends \ArrayObject
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
     * The tag name
     *
     * @var string
     */
    protected $name;
    /**
     * The tag type, valid types are `option`, `boolean`
     *
     * @var string
     */
    protected $type;
    /**
     * An array of translations consisting of the language code `langCode` and the tag name. You need to define `1` language object at minimum.
     *
     * @var ProductTagLanguageModel[]
     */
    protected $languages;
    /**
     * The tag name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The tag name
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
    /**
     * The tag type, valid types are `option`, `boolean`
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The tag type, valid types are `option`, `boolean`
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * An array of translations consisting of the language code `langCode` and the tag name. You need to define `1` language object at minimum.
     *
     * @return ProductTagLanguageModel[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * An array of translations consisting of the language code `langCode` and the tag name. You need to define `1` language object at minimum.
     *
     * @param ProductTagLanguageModel[] $languages
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
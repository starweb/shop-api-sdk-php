<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitModel extends \ArrayObject
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
     * The units id
     *
     * @var int
     */
    protected $unitId;
    /**
     * 
     *
     * @var ProductUnitLanguageModelCollection
     */
    protected $languages;
    /**
     * The units id
     *
     * @return int
     */
    public function getUnitId() : int
    {
        return $this->unitId;
    }
    /**
     * The units id
     *
     * @param int $unitId
     *
     * @return self
     */
    public function setUnitId(int $unitId) : self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * 
     *
     * @return ProductUnitLanguageModelCollection
     */
    public function getLanguages() : ProductUnitLanguageModelCollection
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductUnitLanguageModelCollection $languages
     *
     * @return self
     */
    public function setLanguages(ProductUnitLanguageModelCollection $languages) : self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;
        return $this;
    }
}
<?php

namespace Starweb\Api\Model\ProductUnit;

class ProductUnit
{
    /**
     *
     *
     * @var ProductUnitLanguageCollection
     */
    protected $languages;
    /**
     * The units id
     *
     * @var int
     */
    protected $unitId;
    /**
     *
     *
     * @return ProductUnitLanguageCollection
     */
    public function getLanguages() : ?ProductUnitLanguageCollection
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
    public function setLanguages(?ProductUnitLanguageModelCollection $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
    /**
     * The units id
     *
     * @return int
     */
    public function getUnitId() : ?int
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
    public function setUnitId(?int $unitId) : self
    {
        $this->unitId = $unitId;
        return $this;
    }
}

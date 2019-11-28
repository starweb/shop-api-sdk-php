<?php

namespace Starweb\Api\Generated\Model;

class ProductUnitModel
{
    /**
     * The units id
     *
     * @var int
     */
    protected $unitId;
    /**
     * The external id of this unit
     *
     * @var string
     */
    protected $externalId = '';
    /**
     * 
     *
     * @var ProductUnitLanguageModel[]
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
        $this->unitId = $unitId;
        return $this;
    }
    /**
     * The external id of this unit
     *
     * @return string
     */
    public function getExternalId() : string
    {
        return $this->externalId;
    }
    /**
     * The external id of this unit
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(string $externalId) : self
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * 
     *
     * @return ProductUnitLanguageModel[]
     */
    public function getLanguages() : array
    {
        return $this->languages;
    }
    /**
     * 
     *
     * @param ProductUnitLanguageModel[] $languages
     *
     * @return self
     */
    public function setLanguages(array $languages) : self
    {
        $this->languages = $languages;
        return $this;
    }
}
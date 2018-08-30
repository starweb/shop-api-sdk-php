<?php

namespace Starweb\Api\Model\ProductVariantAttribute;

class ProductVariantAttribute
{
    /**
     * The id for this attribute
     *
     * @var int
     */
    protected $attributeId;
    /**
     * A collection of attribute languages
     *
     * @var ProductVariantAttributeLanguages
     */
    protected $languages;

    /**
     * The id for this attribute
     *
     * @return int
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }

    /**
     * The id for this attribute
     *
     * @param int $attributeId
     *
     * @return self
     */
    public function setAttributeId(int $attributeId): self
    {
        $this->attributeId = $attributeId;

        return $this;
    }

    /**
     * A collection of attribute languages
     *
     * @return ProductVariantAttributeLanguages
     */
    public function getLanguages(): ?ProductVariantAttributeLanguages
    {
        return $this->languages;
    }

    /**
     * A collection of attribute languages
     *
     * @param ProductVariantAttributeLanguages $languages
     *
     * @return self
     */
    public function setLanguages(ProductVariantAttributeLanguages $languages): self
    {
        $this->languages = $languages;

        return $this;
    }
}

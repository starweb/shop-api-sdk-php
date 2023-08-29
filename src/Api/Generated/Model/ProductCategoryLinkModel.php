<?php

namespace Starweb\Api\Generated\Model;

class ProductCategoryLinkModel extends \ArrayObject
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
     * The category id this product should be listed in
     *
     * @var int
     */
    protected $categoryId;
    /**
     * The sort index this product have in the category
     *
     * @var int
     */
    protected $sortIndex;
    /**
     * The category id this product should be listed in
     *
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    /**
     * The category id this product should be listed in
     *
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId) : self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * The sort index this product have in the category
     *
     * @return int
     */
    public function getSortIndex() : int
    {
        return $this->sortIndex;
    }
    /**
     * The sort index this product have in the category
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
}
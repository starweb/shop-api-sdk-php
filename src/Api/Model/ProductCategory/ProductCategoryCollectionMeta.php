<?php

namespace Starweb\Api\Model\ProductCategory;

class ProductCategoryCollectionMeta
{
    /**
     *
     *
     * @var Pagination
     */
    protected $pagination;

    /**
     *
     *
     * @return Pagination
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     *
     *
     * @param Pagination $pagination
     *
     * @return self
     */
    public function setPagination(Pagination $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}

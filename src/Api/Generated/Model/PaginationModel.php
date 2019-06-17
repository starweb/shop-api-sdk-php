<?php

namespace Starweb\Api\Generated\Model;

class PaginationModel
{
    /**
     * The current requested page
     *
     * @var int
     */
    protected $currentPage;
    /**
     * Number of items per page
     *
     * @var int
     */
    protected $perPage;
    /**
     * The total number of items
     *
     * @var int
     */
    protected $total;
    /**
     * Number of items on this page
     *
     * @var int
     */
    protected $count;
    /**
     * Number of items on this page
     *
     * @var int
     */
    protected $totalPages;
    /**
     * The current requested page
     *
     * @return int
     */
    public function getCurrentPage() : ?int
    {
        return $this->currentPage;
    }
    /**
     * The current requested page
     *
     * @param int $currentPage
     *
     * @return self
     */
    public function setCurrentPage(?int $currentPage) : self
    {
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * Number of items per page
     *
     * @return int
     */
    public function getPerPage() : ?int
    {
        return $this->perPage;
    }
    /**
     * Number of items per page
     *
     * @param int $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage) : self
    {
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * The total number of items
     *
     * @return int
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * The total number of items
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * Number of items on this page
     *
     * @return int
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * Number of items on this page
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(?int $count) : self
    {
        $this->count = $count;
        return $this;
    }
    /**
     * Number of items on this page
     *
     * @return int
     */
    public function getTotalPages() : ?int
    {
        return $this->totalPages;
    }
    /**
     * Number of items on this page
     *
     * @param int $totalPages
     *
     * @return self
     */
    public function setTotalPages(?int $totalPages) : self
    {
        $this->totalPages = $totalPages;
        return $this;
    }
}
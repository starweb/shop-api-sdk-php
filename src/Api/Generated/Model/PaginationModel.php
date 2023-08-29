<?php

namespace Starweb\Api\Generated\Model;

class PaginationModel extends \ArrayObject
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
     * The current requested page
     *
     * @var int|null
     */
    protected $currentPage;
    /**
     * Number of items per page
     *
     * @var int|null
     */
    protected $perPage;
    /**
     * The total number of items
     *
     * @var int|null
     */
    protected $total;
    /**
     * Number of items on this page
     *
     * @var int|null
     */
    protected $count;
    /**
     * Number of items on this page
     *
     * @var int|null
     */
    protected $totalPages;
    /**
     * The current requested page
     *
     * @return int|null
     */
    public function getCurrentPage() : ?int
    {
        return $this->currentPage;
    }
    /**
     * The current requested page
     *
     * @param int|null $currentPage
     *
     * @return self
     */
    public function setCurrentPage(?int $currentPage) : self
    {
        $this->initialized['currentPage'] = true;
        $this->currentPage = $currentPage;
        return $this;
    }
    /**
     * Number of items per page
     *
     * @return int|null
     */
    public function getPerPage() : ?int
    {
        return $this->perPage;
    }
    /**
     * Number of items per page
     *
     * @param int|null $perPage
     *
     * @return self
     */
    public function setPerPage(?int $perPage) : self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;
        return $this;
    }
    /**
     * The total number of items
     *
     * @return int|null
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * The total number of items
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * Number of items on this page
     *
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }
    /**
     * Number of items on this page
     *
     * @param int|null $count
     *
     * @return self
     */
    public function setCount(?int $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Number of items on this page
     *
     * @return int|null
     */
    public function getTotalPages() : ?int
    {
        return $this->totalPages;
    }
    /**
     * Number of items on this page
     *
     * @param int|null $totalPages
     *
     * @return self
     */
    public function setTotalPages(?int $totalPages) : self
    {
        $this->initialized['totalPages'] = true;
        $this->totalPages = $totalPages;
        return $this;
    }
}
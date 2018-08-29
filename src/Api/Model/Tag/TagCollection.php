<?php

namespace Starweb\Api\Model\Tag;

use Starweb\Api\Model\CollectionInterface;

class TagCollection implements CollectionInterface
{
    /**
     * A list of customer tags
     *
     * @var Tag[]
     */
    protected $data;

    /**
     * A list of customer tags
     *
     * @return Tag[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * A list of customer tags
     *
     * @param Tag[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->data = $data;

        return $this;
    }
}
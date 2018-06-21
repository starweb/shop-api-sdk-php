<?php

namespace Starweb\Model;

class Shop implements ModelInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $idCode;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getIdCode(): string
    {
        return $this->idCode;
    }
}

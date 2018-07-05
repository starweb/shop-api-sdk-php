<?php

namespace Starweb\Api\Authentication;

interface TokenInterface
{
    public function __toString(): string;
    public function getTtl(): int;
    public function getExpiresIn(): \DateTime;
}

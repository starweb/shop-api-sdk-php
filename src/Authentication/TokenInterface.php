<?php

namespace Starweb\Authentication;


interface TokenInterface
{
    public function getToken(): string;
}
<?php

namespace Starweb\Operation;

interface OperationInterface
{
    public function getUri(): string;

    public function getMethod(): string;

    public function getBody(): string;

    public function getHeaders(): array;
}
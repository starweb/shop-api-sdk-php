<?php

namespace Starweb\Api\Operation;

interface OperationInterface
{
    public function getPath(): string;

    public function getMethod(): string;

    public function getQueryParameters(): array;

    public function getHeaders(): array;

    public function getResolvedPath(): string;
}

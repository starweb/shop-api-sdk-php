<?php

namespace Starweb\Api\Operation;

interface OperationInterface
{
    public function getPath(): string;

    public function getMethod(): string;

    public function getResolvedParameters(): array;

    public function getHeaders(): array;

    public function getResolvedPath(): string;

    public function resolvePathParameters(): array;
}

<?php

namespace Starweb\Api\Operation;

interface OperationInterface
{
    public function getId(): string;

    public function getUri(): string;

    public function getMethod(): string;

    public function getBody(): string;

    public function getHeaders(): array;
}
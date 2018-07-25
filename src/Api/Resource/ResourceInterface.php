<?php

namespace Starweb\Api\Resource;

interface ResourceInterface
{
    public function getResolvedEndpoint(): string;
}

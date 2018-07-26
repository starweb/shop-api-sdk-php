<?php

namespace Starweb\Api\Resource;

use Symfony\Component\OptionsResolver\OptionsResolver;

interface ResourceInterface
{
    public function getPathParameters(): array;
    public function getPathParametersResolver(): OptionsResolver;
}

<?php

namespace Starweb\Api\Resource;

use Symfony\Component\OptionsResolver\OptionsResolver;

interface ResourceInterface
{
    public function getPathParametersResolver(): OptionsResolver;
    public function getQueryParametersResolver(): OptionsResolver;
}

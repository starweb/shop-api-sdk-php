<?php

namespace Starweb\Api\Operation\Currency;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveCurrency extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/currencies/{currencyCode}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('currencyCode');
        $resolver->setAllowedTypes('currencyCode', 'string');

        return $resolver;
    }
}

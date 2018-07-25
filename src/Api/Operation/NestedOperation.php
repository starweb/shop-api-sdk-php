<?php

namespace Starweb\Api\Operation;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class NestedOperation extends Operation
{
    /**
     * @var OptionsResolver
     */
    private $pathParametersResolver;

    public function __construct(
        OptionsResolver $pathParamsResolver,
        array $queryParameters = [],
        array $pathParameters = [],
        array $headers = []
    ) {
        parent::__construct($queryParameters, $pathParameters, $headers);
        $this->pathParametersResolver = $pathParameters;
    }

    /**
     * @return OptionsResolver
     */
    public function getPathParametersResolver(): OptionsResolver
    {
        return $this->pathParametersResolver ?? new OptionsResolver();
    }
}

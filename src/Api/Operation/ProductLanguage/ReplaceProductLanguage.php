<?php declare(strict_types=1);

namespace Starweb\Api\Operation\ProductLanguage;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplaceProductLanguage extends Operation
{
    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return '/products/{productId}/languages/{langCode}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = parent::getPathParametersResolver();
        $resolver->setRequired('langCode');
        $resolver->setAllowedTypes('langCode', 'string');

        return $resolver;
    }
}

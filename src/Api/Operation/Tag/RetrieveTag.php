<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Tag;

use Starweb\Api\Operation\Operation;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RetrieveTag extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customer-tags/{tagId}';
    }

    protected function getPathParametersResolver(): OptionsResolver
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired('tagId');
        $resolver->setAllowedTypes('tagId', 'integer');

        return $resolver;
    }
}

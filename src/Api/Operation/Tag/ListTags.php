<?php declare(strict_types=1);

namespace Starweb\Api\Operation\Tag;

use Starweb\Api\Operation\Operation;

class ListTags extends Operation
{
    public function getMethod(): string
    {
        return 'GET';
    }

    public function getPath(): string
    {
        return '/customer-tags';
    }
}

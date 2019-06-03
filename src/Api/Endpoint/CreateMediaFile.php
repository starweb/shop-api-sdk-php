<?php declare(strict_types=1);

namespace Starweb\Api\Endpoint;

use Starweb\Api\Generated\Endpoint\CreateMediaFile as CreateMediaFileBase;

class CreateMediaFile extends CreateMediaFileBase
{
    use MediaFileEndpointGetBodyTrait;
}

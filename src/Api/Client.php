<?php declare(strict_types=1);

namespace Starweb\Api;

use Starweb\Api\Generated\Client as BaseClient;
use Starweb\Api\Model\MediaFileUploadModel;

class Client extends BaseClient
{
    public function createMediaFile(MediaFileUploadModel $requestBody = null, string $fetch = BaseClient::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Endpoint\CreateMediaFile($requestBody), $fetch);
    }
}

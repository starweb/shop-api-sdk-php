<?php declare(strict_types=1);

namespace Starweb\HttpClient;

use Starweb\Api\Client\Client as BaseClient;

class Client extends BaseClient
{
    public function createMediaFile(string $filename, Model\MediaFileUploadModel $requestBody = null, string $fetch = BaseClient::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Client\Endpoint\CreateMediaFile($requestBody), $fetch);
    }
}

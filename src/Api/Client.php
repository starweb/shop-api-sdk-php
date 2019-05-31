<?php declare(strict_types=1);

namespace Starweb\Api;

use Starweb\Api\Generated\Client as BaseClient;
use Starweb\HttpClient\Model;

class Client extends BaseClient
{
    public function createMediaFile(string $filename, Model\MediaFileUploadModel $requestBody = null, string $fetch = BaseClient::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Starweb\Api\Generated\Endpoint\CreateMediaFile($requestBody), $fetch);
    }
}

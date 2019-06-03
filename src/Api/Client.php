<?php declare(strict_types=1);

namespace Starweb\Api;

use Starweb\Api\Generated\Client as BaseClient;
use Starweb\Api\Generated\Model\MediaFileUploadModel;

class Client extends BaseClient
{
    public function createMediaFile(MediaFileUploadModel $requestBody = null, string $fetch = BaseClient::FETCH_OBJECT)
    {
        if (!$requestBody instanceof \Starweb\Api\Model\MediaFileUploadModel) {
            throw new \LogicException(
                'you need to pass an object of type ' . \Starweb\Api\Model\MediaFileUploadModel::class
            );
        }

        return $this->executePsr7Endpoint(new \Starweb\Api\Endpoint\CreateMediaFile($requestBody), $fetch);
    }
}

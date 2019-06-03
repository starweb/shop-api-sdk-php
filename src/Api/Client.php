<?php declare(strict_types=1);

namespace Starweb\Api;

use Starweb\Api\Generated\Client as BaseClient;
use Starweb\Api\Generated\Model\MediaFileUploadModel;

class Client extends BaseClient
{
    public function createMediaFile(MediaFileUploadModel $requestBody = null, string $fetch = BaseClient::FETCH_OBJECT)
    {
        $this->checkCustomMediaFileUploadModelInstance($requestBody);

        return $this->executePsr7Endpoint(new \Starweb\Api\Endpoint\CreateMediaFile($requestBody), $fetch);
    }

    public function putMediaFile(
        int $mediaFileId,
        MediaFileUploadModel $requestBody,
        string $fetch = BaseClient::FETCH_OBJECT
    )
    {
        $this->checkCustomMediaFileUploadModelInstance($requestBody);

        return $this->executePsr7Endpoint(new \Starweb\Api\Endpoint\PutMediaFile($mediaFileId, $requestBody), $fetch);
    }

    public function patchMediaFile(
        int $mediaFileId,
        MediaFileUploadModel $requestBody,
        string $fetch = BaseClient::FETCH_OBJECT
    ) {
        $this->checkCustomMediaFileUploadModelInstance($requestBody);

        return $this->executePsr7Endpoint(new \Starweb\Api\Endpoint\PatchMediaFile($mediaFileId, $requestBody), $fetch);
    }

    private function checkCustomMediaFileUploadModelInstance(MediaFileUploadModel $requestBody): void
    {
        if (!$requestBody instanceof \Starweb\Api\Model\MediaFileUploadModel) {
            throw new \LogicException(
                'you need to pass an object of type ' . \Starweb\Api\Model\MediaFileUploadModel::class
            );
        }
    }
}

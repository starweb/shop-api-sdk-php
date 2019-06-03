<?php declare(strict_types=1);

namespace Starweb\Api;

use Starweb\Api\Endpoint\CreateMediaFile;
use Starweb\Api\Endpoint\PatchMediaFile;
use Starweb\Api\Endpoint\PutMediaFile;
use Starweb\Api\Generated\Client as GeneratedClient;
use Starweb\Api\Generated\Model\MediaFileUploadModel as GeneratedMediaFileUploadModel;
use Starweb\Api\Model\MediaFileUploadModel;

class Client extends GeneratedClient
{
    public function createMediaFile(
        GeneratedMediaFileUploadModel $requestBody,
        string $fetch = GeneratedClient::FETCH_OBJECT
    ) {
        $this->checkCustomMediaFileUploadModelInstance($requestBody);

        return $this->executePsr7Endpoint(new CreateMediaFile($requestBody), $fetch);
    }

    public function putMediaFile(
        int $mediaFileId,
        GeneratedMediaFileUploadModel $requestBody,
        string $fetch = GeneratedClient::FETCH_OBJECT
    ) {
        $this->checkCustomMediaFileUploadModelInstance($requestBody);

        return $this->executePsr7Endpoint(new PutMediaFile($mediaFileId, $requestBody), $fetch);
    }

    public function patchMediaFile(
        int $mediaFileId,
        GeneratedMediaFileUploadModel $requestBody,
        string $fetch = GeneratedClient::FETCH_OBJECT
    ) {
        $this->checkCustomMediaFileUploadModelInstance($requestBody);

        return $this->executePsr7Endpoint(new PatchMediaFile($mediaFileId, $requestBody), $fetch);
    }

    private function checkCustomMediaFileUploadModelInstance(GeneratedMediaFileUploadModel $requestBody): void
    {
        if (!$requestBody instanceof MediaFileUploadModel) {
            throw new \LogicException(
                'you need to pass an object of type ' . MediaFileUploadModel::class
            );
        }
    }
}

<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\MediaFile\MediaFile;
use Starweb\Api\Model\MediaFile\MediaFileCollection;
use Starweb\Api\Model\MediaFile\MediaFileItem;
use Starweb\Api\Model\MediaFile\MediaFileUpload;
use Starweb\Api\Model\UploadFileInterface;
use Starweb\Api\Operation\MediaFiles\CreateMediaFile;
use Starweb\Api\Operation\MediaFiles\DeleteMediaFile;
use Starweb\Api\Operation\MediaFiles\ListMediaFiles;
use Starweb\Api\Operation\MediaFiles\RetrieveMediaFile;
use Starweb\Api\Operation\MediaFiles\UpdateMediaFile;

class MediaFileResource extends Resource
{
    /**
     * @return MediaFileCollection
     *
     * @throws \Http\Client\Exception
     *
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(int $page = null): MediaFileCollection
    {
        $response = $this->performOperation(new ListMediaFiles(['page' => $page]));

        return $response->getContentAsModel(MediaFileCollection::class);
    }

    /**
     * @param MediaFileUpload $file
     *
     * @return MediaFile
     *
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function create(UploadFileInterface $file): MediaFile
    {
        $response = $this->performOperation(new CreateMediaFile($file));
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }

    /**
     * @param int $mediaFileId
     *
     * @return MediaFile
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $mediaFileId): MediaFile
    {
        $response = $this->performOperation(new RetrieveMediaFile([], ['mediaFileId' => $mediaFileId]));
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }

    /**
     * @param int $mediaFileId
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $mediaFileId): bool
    {
        $response = $this->performOperation(new DeleteMediaFile([], ['mediaFileId' => $mediaFileId]));

        return 204 === $response->getStatusCode();
    }

    /**
     * @param MediaFileUpload $file
     *
     * @return MediaFile
     *
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function update(int $mediaFileId, MediaFileUpload $file): MediaFile
    {
        $response = $this->performOperation(new UpdateMediaFile($file, [], ['mediaFileId' => $mediaFileId]));
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }
}

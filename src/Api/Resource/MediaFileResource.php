<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\MediaFile\MediaFile;
use Starweb\Api\Model\MediaFile\MediaFileCollection;
use Starweb\Api\Model\MediaFile\MediaFileItem;
use Starweb\Api\Model\MediaFile\MediaFileUpload;

class MediaFileResource extends Resource
{
    private const ENDPOINT = '/media-files';

    public function list(): MediaFileCollection
    {
        $response = $this->getClient()->get(self::ENDPOINT);

        return $response->getContentAsModel(MediaFileCollection::class);
    }

    public function create(MediaFileUpload $file): MediaFile
    {
        $response = $this->getClient()->postUploadFile(self::ENDPOINT, $file);
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }

    public function retrieve(int $id): MediaFile
    {
        $response = $this->getClient()->get(sprintf(self::ENDPOINT . '/%s', $id));
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }
}

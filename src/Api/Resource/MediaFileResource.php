<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\MediaFile\MediaFile;
use Starweb\Api\Model\MediaFile\MediaFileCollection;
use Starweb\Api\Model\MediaFile\MediaFileUploadInterface;

class MediaFileResource extends Resource
{
    private const ENDPOINT = '/media-files';

    public function list(): MediaFileCollection
    {
        $response = $this->getClient()->get(self::ENDPOINT);

        return $response->getContentAsModel(MediaFileCollection::class);
    }

    public function create(MediaFileUploadInterface $file): MediaFile
    {
        $response = $this->getClient()->postUploadFile(self::ENDPOINT, $file);

        return $response->getContentAsModel(MediaFile::class);
    }

    public function retrieve(int $id): MediaFile
    {
        $response = $this->getClient()->get(sprintf(self::ENDPOINT . '/%s', $id));

        return $response->getContentAsModel(MediaFile::class);
    }


    public function update(MediaFile $mediaFile): MediaFile
    {
        return $this->updateResource(sprintf('/product-categories/%s', $category->getId()), $category);
    }
}

<?php

namespace Starweb\Api\Resource;

use Starweb\Api\Model\MediaFile\MediaFile;
use Starweb\Api\Model\MediaFile\MediaFileCollection;
use Starweb\Api\Model\MediaFile\MediaFileItem;
use Starweb\Api\Model\MediaFile\MediaFileUpload;

class MediaFileResource extends Resource
{
    /**
     * the base endpoint of this resource
     */
    private const ENDPOINT = '/media-files';

    /**
     * @return MediaFileCollection
     *
     * @throws \Http\Client\Exception
     *
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function list(): MediaFileCollection
    {
        $response = $this->getClient()->get(self::ENDPOINT);

        return $response->getContentAsModel(MediaFileCollection::class);
    }

    /**
     * @param MediaFileUpload $file
     *
     * @return MediaFile
     *
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function create(MediaFileUpload $file): MediaFile
    {
        $response = $this->getClient()->uploadFile('POST', self::ENDPOINT, $file);
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }

    /**
     * @param int $id
     *
     * @return MediaFile
     *
     * @throws \Http\Client\Exception
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function retrieve(int $id): MediaFile
    {
        $response = $this->getClient()->get(sprintf(self::ENDPOINT . '/%s', $id));
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }

    /**
     * @param int $id
     *
     * @return bool
     *
     * @throws \Http\Client\Exception
     */
    public function delete(int $id): bool
    {
        $response = $this->getClient()->delete(sprintf(self::ENDPOINT . '/%s', $id));

        return 204 === $response->getStatusCode();
    }

    /**
     * @param MediaFileUpload $file
     *
     * @return MediaFile
     *
     * @throws \Starweb\Exception\InvalidResponseContentException
     */
    public function update(int $id, MediaFileUpload $file): MediaFile
    {
        $response = $this->getClient()->uploadFile('PATCH', sprintf(self::ENDPOINT . '/%s', $id), $file);
        $item = $response->getContentAsModel(MediaFileItem::class);

        return $item->getData();
    }
}

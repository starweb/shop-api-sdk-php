<?php declare(strict_types=1);

namespace Starweb\Api\Model;

use Starweb\Api\Generated\Model\MediaFileUploadModel as GeneratedMediaFileUploadModel;

class MediaFileUploadModel extends GeneratedMediaFileUploadModel
{
    /**
     * @var string
     */
    private $filename;

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }
}

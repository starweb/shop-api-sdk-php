<?php declare(strict_types=1);

namespace Starweb\Api\Model;

class MediaFileUploadModel extends \Starweb\Api\Generated\Model\MediaFileUploadModel
{
    /**
     * @var string
     */
    private $filename;

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     */
    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }
}

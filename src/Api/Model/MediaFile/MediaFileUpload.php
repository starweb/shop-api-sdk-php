<?php declare(strict_types=1);

namespace Starweb\Api\Model\MediaFile;

use Starweb\Api\Model\UploadFileInterface;

class MediaFileUpload implements UploadFileInterface
{
    /**
     * @var string
     */
    private $path;

    /** @var \SplFileInfo */
    private $info;

    /**
     * MediaFileUpload constructor.
     *
     * @param string $file
     */
    public function __construct(string $path)
    {
        $this->path = $path;
        $this->info = new \SplFileInfo($path);
    }

    public function getContent(): string
    {
        return file_get_contents($this->path);
    }

    /**
     * @return \SplFileInfo
     */
    public function getInfo(): \SplFileInfo
    {
        return $this->info;
    }

    public function getFilename(): string
    {
        return $this->info->getFilename();
    }

    public function getExtension(): string
    {
        return $this->info->getExtension();
    }

    public function getMimeType(): string
    {
        $info = new \finfo(FILEINFO_MIME_TYPE);

        return $info->file($this->path);
    }
}

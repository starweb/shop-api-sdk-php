<?php declare(strict_types=1);

namespace Starweb\Api\Model\MediaFile;

use Starweb\Api\Model\ItemInterface;
use Starweb\Api\Model\ModelInterface;

class MediaFileItem implements ItemInterface
{
    /**
     * @var MediaFile
     */
    protected $data;

    /**
     *
     *
     * @return MediaFile
     */
    public function getData(): MediaFile
    {
        return $this->data;
    }

    /**
     * @param MediaFile $data
     *
     * @return self
     */
    public function setData(ModelInterface $data): self
    {
        $this->data = $data;

        return $this;
    }
}

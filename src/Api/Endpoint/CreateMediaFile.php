<?php declare(strict_types=1);

namespace Starweb\Api\Endpoint;

use Starweb\Api\Generated\Endpoint\CreateMediaFile as CreateMediaFileBase;
use Starweb\Api\Generated\Model\MediaFileUploadModel;

class CreateMediaFile extends CreateMediaFileBase
{
    private $filename;

    private $fileContent;

    public function __construct(string $filename, \Starweb\Api\Generated\Model\MediaFileUploadModel $requestBody = null)
    {
        $this->fileContent = \file_get_contents($filename);
        $this->filename = \basename($filename);

        if ($requestBody === null) {
            $requestBody = new MediaFileUploadModel();
            $requestBody->setFile($this->fileContent);
        }

        parent::__construct($requestBody);
    }

    public function getBody(
        \Symfony\Component\Serializer\SerializerInterface $serializer,
        \Http\Message\StreamFactory $streamFactory = null
    ): array {
        if ($this->body instanceof \Starweb\Api\Generated\Model\MediaFileUploadModel) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $bodyBuilder->addResource($key, $value, ['filename' => $this->filename]);
            }
            return array(array('Content-Type' => array('multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '""'))), $bodyBuilder->build());
        }
        return array(array(), null);

    }

}

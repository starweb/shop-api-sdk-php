<?php declare(strict_types=1);

namespace Starweb\Api\Endpoint;

use Starweb\Api\Generated\Endpoint\CreateMediaFile as CreateMediaFileBase;
use Starweb\Api\Generated\Model\MediaFileUploadModel;

class CreateMediaFile extends CreateMediaFileBase
{
    public function getBody(
        \Symfony\Component\Serializer\SerializerInterface $serializer,
        \Http\Message\StreamFactory $streamFactory = null
    ): array {
        if ($this->body instanceof \Starweb\Api\Model\MediaFileUploadModel) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $bodyBuilder->addResource($key, $value, ['filename' => $this->body->getFilename()]);
            }
            return array(array('Content-Type' => array('multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '""'))), $bodyBuilder->build());
        }
        return array(array(), null);

    }

}

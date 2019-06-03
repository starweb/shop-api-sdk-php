<?php declare(strict_types=1);

namespace Starweb\Api\Endpoint;

use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Message\StreamFactory;
use Starweb\Api\Model\MediaFileUploadModel;
use Symfony\Component\Serializer\SerializerInterface;

trait MediaFileEndpointTrait
{
    public function getBody(SerializerInterface $serializer, StreamFactory $streamFactory = null): array
    {
        if ($this->body instanceof MediaFileUploadModel) {
            $bodyBuilder = new MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $bodyBuilder->addResource($key, $value, ['filename' => $this->body->getFilename()]);
            }

            return [
                ['Content-Type' => array('multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '""'))],
                $bodyBuilder->build()
            ];
        }

        return [[], null];
    }
}

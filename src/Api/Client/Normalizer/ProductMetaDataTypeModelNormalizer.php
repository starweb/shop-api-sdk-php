<?php

namespace Starweb\Api\Client\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductMetaDataTypeModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Client\\Model\\ProductMetaDataTypeModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Client\Model\ProductMetaDataTypeModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Client\Model\ProductMetaDataTypeModel();
        if (property_exists($data, 'metaDataTypeId')) {
            $object->setMetaDataTypeId($data->{'metaDataTypeId'});
        }
        if (property_exists($data, 'languages')) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Client\\Model\\ProductMetaDataTypeLanguageModelCollection', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMetaDataTypeId()) {
            $data->{'metaDataTypeId'} = $object->getMetaDataTypeId();
        }
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        return $data;
    }
}
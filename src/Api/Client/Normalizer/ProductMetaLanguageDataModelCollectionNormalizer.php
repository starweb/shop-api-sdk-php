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
class ProductMetaLanguageDataModelCollectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Client\\Model\\ProductMetaLanguageDataModelCollection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Client\Model\ProductMetaLanguageDataModelCollection;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Client\Model\ProductMetaLanguageDataModelCollection();
        if (property_exists($data, 'data')) {
            $values = array();
            foreach ($data->{'data'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Client\\Model\\ProductMetaLanguageDataModel', 'json', $context);
            }
            $object->setData($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getData()) {
            $values = array();
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'data'} = $values;
        }
        return $data;
    }
}
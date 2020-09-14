<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductTagLinkModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductTagLinkModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductTagLinkModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductTagLinkModel();
        if (property_exists($data, 'tagOptionId') && $data->{'tagOptionId'} !== null) {
            $object->setTagOptionId($data->{'tagOptionId'});
        }
        elseif (property_exists($data, 'tagOptionId') && $data->{'tagOptionId'} === null) {
            $object->setTagOptionId(null);
        }
        if (property_exists($data, 'tagId') && $data->{'tagId'} !== null) {
            $object->setTagId($data->{'tagId'});
        }
        elseif (property_exists($data, 'tagId') && $data->{'tagId'} === null) {
            $object->setTagId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTagOptionId()) {
            $data->{'tagOptionId'} = $object->getTagOptionId();
        }
        else {
            $data->{'tagOptionId'} = null;
        }
        if (null !== $object->getTagId()) {
            $data->{'tagId'} = $object->getTagId();
        }
        else {
            $data->{'tagId'} = null;
        }
        return $data;
    }
}
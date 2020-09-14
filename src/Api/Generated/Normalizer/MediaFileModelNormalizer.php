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
class MediaFileModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\MediaFileModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\MediaFileModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\MediaFileModel();
        if (property_exists($data, 'mediaFileId') && $data->{'mediaFileId'} !== null) {
            $object->setMediaFileId($data->{'mediaFileId'});
        }
        elseif (property_exists($data, 'mediaFileId') && $data->{'mediaFileId'} === null) {
            $object->setMediaFileId(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'createdAt') && $data->{'createdAt'} !== null) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        elseif (property_exists($data, 'createdAt') && $data->{'createdAt'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} !== null) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        elseif (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} === null) {
            $object->setModifiedAt(null);
        }
        if (property_exists($data, 'size') && $data->{'size'} !== null) {
            $object->setSize($data->{'size'});
        }
        elseif (property_exists($data, 'size') && $data->{'size'} === null) {
            $object->setSize(null);
        }
        if (property_exists($data, 'mime') && $data->{'mime'} !== null) {
            $object->setMime($data->{'mime'});
        }
        elseif (property_exists($data, 'mime') && $data->{'mime'} === null) {
            $object->setMime(null);
        }
        if (property_exists($data, 'height') && $data->{'height'} !== null) {
            $object->setHeight($data->{'height'});
        }
        elseif (property_exists($data, 'height') && $data->{'height'} === null) {
            $object->setHeight(null);
        }
        if (property_exists($data, 'width') && $data->{'width'} !== null) {
            $object->setWidth($data->{'width'});
        }
        elseif (property_exists($data, 'width') && $data->{'width'} === null) {
            $object->setWidth(null);
        }
        if (property_exists($data, 'url') && $data->{'url'} !== null) {
            $object->setUrl($data->{'url'});
        }
        elseif (property_exists($data, 'url') && $data->{'url'} === null) {
            $object->setUrl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        return $data;
    }
}
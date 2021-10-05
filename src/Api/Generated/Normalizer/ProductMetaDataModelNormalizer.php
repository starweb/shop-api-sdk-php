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
class ProductMetaDataModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductMetaDataModel();
        if (property_exists($data, 'metaDataId') && $data->{'metaDataId'} !== null) {
            $object->setMetaDataId($data->{'metaDataId'});
        }
        elseif (property_exists($data, 'metaDataId') && $data->{'metaDataId'} === null) {
            $object->setMetaDataId(null);
        }
        if (property_exists($data, 'metaDataTypeId') && $data->{'metaDataTypeId'} !== null) {
            $object->setMetaDataTypeId($data->{'metaDataTypeId'});
        }
        elseif (property_exists($data, 'metaDataTypeId') && $data->{'metaDataTypeId'} === null) {
            $object->setMetaDataTypeId(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ProductMetaLanguageDataModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'languages') && $data->{'languages'} === null) {
            $object->setLanguages(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMetaDataId()) {
            $data->{'metaDataId'} = $object->getMetaDataId();
        }
        else {
            $data->{'metaDataId'} = null;
        }
        if (null !== $object->getMetaDataTypeId()) {
            $data->{'metaDataTypeId'} = $object->getMetaDataTypeId();
        }
        else {
            $data->{'metaDataTypeId'} = null;
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        else {
            $data->{'languages'} = null;
        }
        return $data;
    }
}
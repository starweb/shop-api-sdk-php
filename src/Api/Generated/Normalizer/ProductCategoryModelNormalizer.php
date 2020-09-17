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
class ProductCategoryModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductCategoryModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductCategoryModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductCategoryModel();
        if (property_exists($data, 'categoryId') && $data->{'categoryId'} !== null) {
            $object->setCategoryId($data->{'categoryId'});
        }
        if (property_exists($data, 'parentId') && $data->{'parentId'} !== null) {
            $object->setParentId($data->{'parentId'});
        }
        if (property_exists($data, 'visibility') && $data->{'visibility'} !== null) {
            $object->setVisibility($data->{'visibility'});
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'openPage') && $data->{'openPage'} !== null) {
            $object->setOpenPage($data->{'openPage'});
        }
        if (property_exists($data, 'imageFileId') && $data->{'imageFileId'} !== null) {
            $object->setImageFileId($data->{'imageFileId'});
        }
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        if (property_exists($data, 'externalType') && $data->{'externalType'} !== null) {
            $object->setExternalType($data->{'externalType'});
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        if (property_exists($data, 'hasChildren') && $data->{'hasChildren'} !== null) {
            $object->setHasChildren($data->{'hasChildren'});
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModelCollection', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'parentId'} = $object->getParentId();
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        if (null !== $object->getOpenPage()) {
            $data->{'openPage'} = $object->getOpenPage();
        }
        $data->{'imageFileId'} = $object->getImageFileId();
        $data->{'externalId'} = $object->getExternalId();
        $data->{'externalType'} = $object->getExternalType();
        $data->{'externalIdType'} = $object->getExternalIdType();
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        return $data;
    }
}
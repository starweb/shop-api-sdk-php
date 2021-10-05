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
        elseif (property_exists($data, 'categoryId') && $data->{'categoryId'} === null) {
            $object->setCategoryId(null);
        }
        if (property_exists($data, 'parentId') && $data->{'parentId'} !== null) {
            $object->setParentId($data->{'parentId'});
        }
        elseif (property_exists($data, 'parentId') && $data->{'parentId'} === null) {
            $object->setParentId(null);
        }
        if (property_exists($data, 'visibility') && $data->{'visibility'} !== null) {
            $object->setVisibility($data->{'visibility'});
        }
        elseif (property_exists($data, 'visibility') && $data->{'visibility'} === null) {
            $object->setVisibility(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'openPage') && $data->{'openPage'} !== null) {
            $object->setOpenPage($data->{'openPage'});
        }
        elseif (property_exists($data, 'openPage') && $data->{'openPage'} === null) {
            $object->setOpenPage(null);
        }
        if (property_exists($data, 'imageFileId') && $data->{'imageFileId'} !== null) {
            $object->setImageFileId($data->{'imageFileId'});
        }
        elseif (property_exists($data, 'imageFileId') && $data->{'imageFileId'} === null) {
            $object->setImageFileId(null);
        }
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        elseif (property_exists($data, 'externalId') && $data->{'externalId'} === null) {
            $object->setExternalId(null);
        }
        if (property_exists($data, 'externalType') && $data->{'externalType'} !== null) {
            $object->setExternalType($data->{'externalType'});
        }
        elseif (property_exists($data, 'externalType') && $data->{'externalType'} === null) {
            $object->setExternalType(null);
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        elseif (property_exists($data, 'externalIdType') && $data->{'externalIdType'} === null) {
            $object->setExternalIdType(null);
        }
        if (property_exists($data, 'hasChildren') && $data->{'hasChildren'} !== null) {
            $object->setHasChildren($data->{'hasChildren'});
        }
        elseif (property_exists($data, 'hasChildren') && $data->{'hasChildren'} === null) {
            $object->setHasChildren(null);
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'languages') && $data->{'languages'} === null) {
            $object->setLanguages(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getParentId()) {
            $data->{'parentId'} = $object->getParentId();
        }
        else {
            $data->{'parentId'} = null;
        }
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        else {
            $data->{'visibility'} = null;
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        if (null !== $object->getOpenPage()) {
            $data->{'openPage'} = $object->getOpenPage();
        }
        else {
            $data->{'openPage'} = null;
        }
        if (null !== $object->getImageFileId()) {
            $data->{'imageFileId'} = $object->getImageFileId();
        }
        else {
            $data->{'imageFileId'} = null;
        }
        if (null !== $object->getExternalId()) {
            $data->{'externalId'} = $object->getExternalId();
        }
        else {
            $data->{'externalId'} = null;
        }
        if (null !== $object->getExternalType()) {
            $data->{'externalType'} = $object->getExternalType();
        }
        else {
            $data->{'externalType'} = null;
        }
        if (null !== $object->getExternalIdType()) {
            $data->{'externalIdType'} = $object->getExternalIdType();
        }
        else {
            $data->{'externalIdType'} = null;
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
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
        return $data instanceof \Starweb\Api\Generated\Model\ProductCategoryModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\ProductCategoryModel();
        if (property_exists($data, 'categoryId')) {
            $object->setCategoryId($data->{'categoryId'});
        }
        if (property_exists($data, 'parentId')) {
            $object->setParentId($data->{'parentId'});
        }
        if (property_exists($data, 'visibility')) {
            $object->setVisibility($data->{'visibility'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'openPage')) {
            $object->setOpenPage($data->{'openPage'});
        }
        if (property_exists($data, 'imageFileId')) {
            $object->setImageFileId($data->{'imageFileId'});
        }
        if (property_exists($data, 'externalType')) {
            $object->setExternalType($data->{'externalType'});
        }
        if (property_exists($data, 'externalId')) {
            $object->setExternalId($data->{'externalId'});
        }
        if (property_exists($data, 'hasChildren')) {
            $object->setHasChildren($data->{'hasChildren'});
        }
        if (property_exists($data, 'languages')) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModelCollection', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCategoryId()) {
            $data->{'categoryId'} = $object->getCategoryId();
        }
        if (null !== $object->getParentId()) {
            $data->{'parentId'} = $object->getParentId();
        }
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        if (null !== $object->getOpenPage()) {
            $data->{'openPage'} = $object->getOpenPage();
        }
        if (null !== $object->getImageFileId()) {
            $data->{'imageFileId'} = $object->getImageFileId();
        }
        if (null !== $object->getExternalType()) {
            $data->{'externalType'} = $object->getExternalType();
        }
        if (null !== $object->getExternalId()) {
            $data->{'externalId'} = $object->getExternalId();
        }
        if (null !== $object->getHasChildren()) {
            $data->{'hasChildren'} = $object->getHasChildren();
        }
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        return $data;
    }
}
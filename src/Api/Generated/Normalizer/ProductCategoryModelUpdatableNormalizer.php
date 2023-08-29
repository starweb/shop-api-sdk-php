<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Starweb\Api\Generated\Runtime\Normalizer\CheckArray;
use Starweb\Api\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductCategoryModelUpdatableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductCategoryModelUpdatable';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductCategoryModelUpdatable';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Starweb\Api\Generated\Model\ProductCategoryModelUpdatable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('categoryId', $data)) {
            $object->setCategoryId($data['categoryId']);
            unset($data['categoryId']);
        }
        if (\array_key_exists('parentId', $data)) {
            $object->setParentId($data['parentId']);
            unset($data['parentId']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        if (\array_key_exists('sortIndex', $data)) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        if (\array_key_exists('openPage', $data)) {
            $object->setOpenPage($data['openPage']);
            unset($data['openPage']);
        }
        if (\array_key_exists('imageFileId', $data)) {
            $object->setImageFileId($data['imageFileId']);
            unset($data['imageFileId']);
        }
        if (\array_key_exists('externalType', $data)) {
            $object->setExternalType($data['externalType']);
            unset($data['externalType']);
        }
        if (\array_key_exists('externalId', $data)) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        if (\array_key_exists('hasChildren', $data)) {
            $object->setHasChildren($data['hasChildren']);
            unset($data['hasChildren']);
        }
        if (\array_key_exists('languages', $data)) {
            $values = array();
            foreach ($data['languages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModel', 'json', $context);
            }
            $object->setLanguages($values);
            unset($data['languages']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('parentId') && null !== $object->getParentId()) {
            $data['parentId'] = $object->getParentId();
        }
        if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        if ($object->isInitialized('sortIndex') && null !== $object->getSortIndex()) {
            $data['sortIndex'] = $object->getSortIndex();
        }
        if ($object->isInitialized('openPage') && null !== $object->getOpenPage()) {
            $data['openPage'] = $object->getOpenPage();
        }
        if ($object->isInitialized('imageFileId') && null !== $object->getImageFileId()) {
            $data['imageFileId'] = $object->getImageFileId();
        }
        if ($object->isInitialized('externalType') && null !== $object->getExternalType()) {
            $data['externalType'] = $object->getExternalType();
        }
        if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if ($object->isInitialized('languages') && null !== $object->getLanguages()) {
            $values = array();
            foreach ($object->getLanguages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['languages'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductCategoryModelUpdatable' => false);
    }
}
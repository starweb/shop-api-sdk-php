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
class ProductMediaFileLinkModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductMediaFileLinkModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productMediaFileId', $data) && $data['productMediaFileId'] !== null) {
            $object->setProductMediaFileId($data['productMediaFileId']);
            unset($data['productMediaFileId']);
        }
        elseif (\array_key_exists('productMediaFileId', $data) && $data['productMediaFileId'] === null) {
            $object->setProductMediaFileId(null);
        }
        if (\array_key_exists('mediaFileId', $data) && $data['mediaFileId'] !== null) {
            $object->setMediaFileId($data['mediaFileId']);
            unset($data['mediaFileId']);
        }
        elseif (\array_key_exists('mediaFileId', $data) && $data['mediaFileId'] === null) {
            $object->setMediaFileId(null);
        }
        if (\array_key_exists('sortIndex', $data) && $data['sortIndex'] !== null) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        elseif (\array_key_exists('sortIndex', $data) && $data['sortIndex'] === null) {
            $object->setSortIndex(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $data['mediaFileId'] = $object->getMediaFileId();
        if ($object->isInitialized('sortIndex') && null !== $object->getSortIndex()) {
            $data['sortIndex'] = $object->getSortIndex();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel' => false);
    }
}
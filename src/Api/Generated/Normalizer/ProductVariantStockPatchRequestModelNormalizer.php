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
class ProductVariantStockPatchRequestModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantStockPatchRequestModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantStockPatchRequestModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductVariantStockPatchRequestModel();
        if (\array_key_exists('stockQuantity', $data) && \is_int($data['stockQuantity'])) {
            $data['stockQuantity'] = (double) $data['stockQuantity'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stockStatusId', $data) && $data['stockStatusId'] !== null) {
            $object->setStockStatusId($data['stockStatusId']);
            unset($data['stockStatusId']);
        }
        elseif (\array_key_exists('stockStatusId', $data) && $data['stockStatusId'] === null) {
            $object->setStockStatusId(null);
        }
        if (\array_key_exists('stockQuantity', $data) && $data['stockQuantity'] !== null) {
            $object->setStockQuantity($data['stockQuantity']);
            unset($data['stockQuantity']);
        }
        elseif (\array_key_exists('stockQuantity', $data) && $data['stockQuantity'] === null) {
            $object->setStockQuantity(null);
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
        if ($object->isInitialized('stockStatusId') && null !== $object->getStockStatusId()) {
            $data['stockStatusId'] = $object->getStockStatusId();
        }
        if ($object->isInitialized('stockQuantity') && null !== $object->getStockQuantity()) {
            $data['stockQuantity'] = $object->getStockQuantity();
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
        return array('Starweb\\Api\\Generated\\Model\\ProductVariantStockPatchRequestModel' => false);
    }
}
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
class OrderItemModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderItemModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderItemModel';
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
        $object = new \Starweb\Api\Generated\Model\OrderItemModel();
        if (\array_key_exists('unitPrice', $data) && \is_int($data['unitPrice'])) {
            $data['unitPrice'] = (double) $data['unitPrice'];
        }
        if (\array_key_exists('vatRate', $data) && \is_int($data['vatRate'])) {
            $data['vatRate'] = (double) $data['vatRate'];
        }
        if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
            $data['discount'] = (double) $data['discount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('itemId', $data)) {
            $object->setItemId($data['itemId']);
            unset($data['itemId']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
            unset($data['sku']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('quantity', $data)) {
            $object->setQuantity($data['quantity']);
            unset($data['quantity']);
        }
        if (\array_key_exists('unitSymbol', $data)) {
            $object->setUnitSymbol($data['unitSymbol']);
            unset($data['unitSymbol']);
        }
        if (\array_key_exists('unitPrice', $data)) {
            $object->setUnitPrice($data['unitPrice']);
            unset($data['unitPrice']);
        }
        if (\array_key_exists('vatRate', $data)) {
            $object->setVatRate($data['vatRate']);
            unset($data['vatRate']);
        }
        if (\array_key_exists('discount', $data)) {
            $object->setDiscount($data['discount']);
            unset($data['discount']);
        }
        if (\array_key_exists('discountType', $data)) {
            $object->setDiscountType($data['discountType']);
            unset($data['discountType']);
        }
        if (\array_key_exists('sortIndex', $data)) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
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
        if ($object->isInitialized('sku') && null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        if ($object->isInitialized('unitSymbol') && null !== $object->getUnitSymbol()) {
            $data['unitSymbol'] = $object->getUnitSymbol();
        }
        if ($object->isInitialized('unitPrice') && null !== $object->getUnitPrice()) {
            $data['unitPrice'] = $object->getUnitPrice();
        }
        if ($object->isInitialized('vatRate') && null !== $object->getVatRate()) {
            $data['vatRate'] = $object->getVatRate();
        }
        if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if ($object->isInitialized('discountType') && null !== $object->getDiscountType()) {
            $data['discountType'] = $object->getDiscountType();
        }
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
        return array('Starweb\\Api\\Generated\\Model\\OrderItemModel' => false);
    }
}
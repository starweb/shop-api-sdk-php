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
class ProductVariantModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductVariantModel();
        if (\array_key_exists('weightInKg', $data) && \is_int($data['weightInKg'])) {
            $data['weightInKg'] = (double) $data['weightInKg'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
            unset($data['sku']);
        }
        if (\array_key_exists('isActive', $data)) {
            $object->setIsActive($data['isActive']);
            unset($data['isActive']);
        }
        if (\array_key_exists('sortIndex', $data)) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
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
        if (\array_key_exists('weightInKg', $data) && $data['weightInKg'] !== null) {
            $object->setWeightInKg($data['weightInKg']);
            unset($data['weightInKg']);
        }
        elseif (\array_key_exists('weightInKg', $data) && $data['weightInKg'] === null) {
            $object->setWeightInKg(null);
        }
        if (\array_key_exists('costPrice', $data) && $data['costPrice'] !== null) {
            $object->setCostPrice($data['costPrice']);
            unset($data['costPrice']);
        }
        elseif (\array_key_exists('costPrice', $data) && $data['costPrice'] === null) {
            $object->setCostPrice(null);
        }
        if (\array_key_exists('ean', $data)) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        if (\array_key_exists('mpn', $data)) {
            $object->setMpn($data['mpn']);
            unset($data['mpn']);
        }
        if (\array_key_exists('imageFileId', $data) && $data['imageFileId'] !== null) {
            $object->setImageFileId($data['imageFileId']);
            unset($data['imageFileId']);
        }
        elseif (\array_key_exists('imageFileId', $data) && $data['imageFileId'] === null) {
            $object->setImageFileId(null);
        }
        if (\array_key_exists('attributeValueLinks', $data)) {
            $values = array();
            foreach ($data['attributeValueLinks'] as $value) {
                $values[] = $value;
            }
            $object->setAttributeValueLinks($values);
            unset($data['attributeValueLinks']);
        }
        if (\array_key_exists('volumePricingInheritancePricelistIds', $data)) {
            $values_1 = array();
            foreach ($data['volumePricingInheritancePricelistIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVolumePricingInheritancePricelistIds($values_1);
            unset($data['volumePricingInheritancePricelistIds']);
        }
        if (\array_key_exists('prices', $data)) {
            $values_2 = array();
            foreach ($data['prices'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel', 'json', $context);
            }
            $object->setPrices($values_2);
            unset($data['prices']);
        }
        if (\array_key_exists('attributeValues', $data)) {
            $values_3 = array();
            foreach ($data['attributeValues'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModel', 'json', $context);
            }
            $object->setAttributeValues($values_3);
            unset($data['attributeValues']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
            $data['isActive'] = $object->getIsActive();
        }
        if ($object->isInitialized('sortIndex') && null !== $object->getSortIndex()) {
            $data['sortIndex'] = $object->getSortIndex();
        }
        if ($object->isInitialized('stockStatusId') && null !== $object->getStockStatusId()) {
            $data['stockStatusId'] = $object->getStockStatusId();
        }
        if ($object->isInitialized('stockQuantity') && null !== $object->getStockQuantity()) {
            $data['stockQuantity'] = $object->getStockQuantity();
        }
        if ($object->isInitialized('weightInKg') && null !== $object->getWeightInKg()) {
            $data['weightInKg'] = $object->getWeightInKg();
        }
        if ($object->isInitialized('costPrice') && null !== $object->getCostPrice()) {
            $data['costPrice'] = $object->getCostPrice();
        }
        if ($object->isInitialized('ean') && null !== $object->getEan()) {
            $data['ean'] = $object->getEan();
        }
        if ($object->isInitialized('mpn') && null !== $object->getMpn()) {
            $data['mpn'] = $object->getMpn();
        }
        if ($object->isInitialized('imageFileId') && null !== $object->getImageFileId()) {
            $data['imageFileId'] = $object->getImageFileId();
        }
        if ($object->isInitialized('attributeValueLinks') && null !== $object->getAttributeValueLinks()) {
            $values = array();
            foreach ($object->getAttributeValueLinks() as $value) {
                $values[] = $value;
            }
            $data['attributeValueLinks'] = $values;
        }
        if ($object->isInitialized('volumePricingInheritancePricelistIds') && null !== $object->getVolumePricingInheritancePricelistIds()) {
            $values_1 = array();
            foreach ($object->getVolumePricingInheritancePricelistIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['volumePricingInheritancePricelistIds'] = $values_1;
        }
        if ($object->isInitialized('prices') && null !== $object->getPrices()) {
            $values_2 = array();
            foreach ($object->getPrices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['prices'] = $values_2;
        }
        if ($object->isInitialized('attributeValues') && null !== $object->getAttributeValues()) {
            $values_3 = array();
            foreach ($object->getAttributeValues() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['attributeValues'] = $values_3;
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductVariantModel' => false);
    }
}
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
class ProductVariantPutRequestModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantPutRequestModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantPutRequestModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductVariantPutRequestModel();
        if (\array_key_exists('weightInKg', $data) && \is_int($data['weightInKg'])) {
            $data['weightInKg'] = (double) $data['weightInKg'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sku', $data) && $data['sku'] !== null) {
            $object->setSku($data['sku']);
            unset($data['sku']);
        }
        elseif (\array_key_exists('sku', $data) && $data['sku'] === null) {
            $object->setSku(null);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('externalIdType', $data) && $data['externalIdType'] !== null) {
            $object->setExternalIdType($data['externalIdType']);
            unset($data['externalIdType']);
        }
        elseif (\array_key_exists('externalIdType', $data) && $data['externalIdType'] === null) {
            $object->setExternalIdType(null);
        }
        if (\array_key_exists('isActive', $data) && $data['isActive'] !== null) {
            $object->setIsActive($data['isActive']);
            unset($data['isActive']);
        }
        elseif (\array_key_exists('isActive', $data) && $data['isActive'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('sortIndex', $data) && $data['sortIndex'] !== null) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        elseif (\array_key_exists('sortIndex', $data) && $data['sortIndex'] === null) {
            $object->setSortIndex(null);
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
        if (\array_key_exists('ean', $data) && $data['ean'] !== null) {
            $object->setEan($data['ean']);
            unset($data['ean']);
        }
        elseif (\array_key_exists('ean', $data) && $data['ean'] === null) {
            $object->setEan(null);
        }
        if (\array_key_exists('mpn', $data) && $data['mpn'] !== null) {
            $object->setMpn($data['mpn']);
            unset($data['mpn']);
        }
        elseif (\array_key_exists('mpn', $data) && $data['mpn'] === null) {
            $object->setMpn(null);
        }
        if (\array_key_exists('imageFileId', $data) && $data['imageFileId'] !== null) {
            $object->setImageFileId($data['imageFileId']);
            unset($data['imageFileId']);
        }
        elseif (\array_key_exists('imageFileId', $data) && $data['imageFileId'] === null) {
            $object->setImageFileId(null);
        }
        if (\array_key_exists('attributeValueLinks', $data) && $data['attributeValueLinks'] !== null) {
            $values = array();
            foreach ($data['attributeValueLinks'] as $value) {
                $values[] = $value;
            }
            $object->setAttributeValueLinks($values);
            unset($data['attributeValueLinks']);
        }
        elseif (\array_key_exists('attributeValueLinks', $data) && $data['attributeValueLinks'] === null) {
            $object->setAttributeValueLinks(null);
        }
        if (\array_key_exists('volumePricingInheritancePricelistIds', $data) && $data['volumePricingInheritancePricelistIds'] !== null) {
            $values_1 = array();
            foreach ($data['volumePricingInheritancePricelistIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVolumePricingInheritancePricelistIds($values_1);
            unset($data['volumePricingInheritancePricelistIds']);
        }
        elseif (\array_key_exists('volumePricingInheritancePricelistIds', $data) && $data['volumePricingInheritancePricelistIds'] === null) {
            $object->setVolumePricingInheritancePricelistIds(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $data['sku'] = $object->getSku();
        if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if ($object->isInitialized('externalIdType') && null !== $object->getExternalIdType()) {
            $data['externalIdType'] = $object->getExternalIdType();
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
        $values = array();
        foreach ($object->getAttributeValueLinks() as $value) {
            $values[] = $value;
        }
        $data['attributeValueLinks'] = $values;
        if ($object->isInitialized('volumePricingInheritancePricelistIds') && null !== $object->getVolumePricingInheritancePricelistIds()) {
            $values_1 = array();
            foreach ($object->getVolumePricingInheritancePricelistIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['volumePricingInheritancePricelistIds'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductVariantPutRequestModel' => false);
    }
}
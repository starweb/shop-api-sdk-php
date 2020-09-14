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
class ProductVariantResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantResponseModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantResponseModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductVariantResponseModel();
        if (property_exists($data, 'sku') && $data->{'sku'} !== null) {
            $object->setSku($data->{'sku'});
        }
        elseif (property_exists($data, 'sku') && $data->{'sku'} === null) {
            $object->setSku(null);
        }
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        elseif (property_exists($data, 'externalId') && $data->{'externalId'} === null) {
            $object->setExternalId(null);
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        elseif (property_exists($data, 'externalIdType') && $data->{'externalIdType'} === null) {
            $object->setExternalIdType(null);
        }
        if (property_exists($data, 'isActive') && $data->{'isActive'} !== null) {
            $object->setIsActive($data->{'isActive'});
        }
        elseif (property_exists($data, 'isActive') && $data->{'isActive'} === null) {
            $object->setIsActive(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} !== null) {
            $object->setStockStatusId($data->{'stockStatusId'});
        }
        elseif (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} === null) {
            $object->setStockStatusId(null);
        }
        if (property_exists($data, 'stockQuantity') && $data->{'stockQuantity'} !== null) {
            $object->setStockQuantity($data->{'stockQuantity'});
        }
        elseif (property_exists($data, 'stockQuantity') && $data->{'stockQuantity'} === null) {
            $object->setStockQuantity(null);
        }
        if (property_exists($data, 'weightInKg') && $data->{'weightInKg'} !== null) {
            $object->setWeightInKg($data->{'weightInKg'});
        }
        elseif (property_exists($data, 'weightInKg') && $data->{'weightInKg'} === null) {
            $object->setWeightInKg(null);
        }
        if (property_exists($data, 'costPrice') && $data->{'costPrice'} !== null) {
            $object->setCostPrice($data->{'costPrice'});
        }
        elseif (property_exists($data, 'costPrice') && $data->{'costPrice'} === null) {
            $object->setCostPrice(null);
        }
        if (property_exists($data, 'ean') && $data->{'ean'} !== null) {
            $object->setEan($data->{'ean'});
        }
        elseif (property_exists($data, 'ean') && $data->{'ean'} === null) {
            $object->setEan(null);
        }
        if (property_exists($data, 'mpn') && $data->{'mpn'} !== null) {
            $object->setMpn($data->{'mpn'});
        }
        elseif (property_exists($data, 'mpn') && $data->{'mpn'} === null) {
            $object->setMpn(null);
        }
        if (property_exists($data, 'imageFileId') && $data->{'imageFileId'} !== null) {
            $object->setImageFileId($data->{'imageFileId'});
        }
        elseif (property_exists($data, 'imageFileId') && $data->{'imageFileId'} === null) {
            $object->setImageFileId(null);
        }
        if (property_exists($data, 'attributeValueLinks') && $data->{'attributeValueLinks'} !== null) {
            $values = array();
            foreach ($data->{'attributeValueLinks'} as $value) {
                $values[] = $value;
            }
            $object->setAttributeValueLinks($values);
        }
        elseif (property_exists($data, 'attributeValueLinks') && $data->{'attributeValueLinks'} === null) {
            $object->setAttributeValueLinks(null);
        }
        if (property_exists($data, 'volumePricingInheritancePricelistIds') && $data->{'volumePricingInheritancePricelistIds'} !== null) {
            $values_1 = array();
            foreach ($data->{'volumePricingInheritancePricelistIds'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVolumePricingInheritancePricelistIds($values_1);
        }
        elseif (property_exists($data, 'volumePricingInheritancePricelistIds') && $data->{'volumePricingInheritancePricelistIds'} === null) {
            $object->setVolumePricingInheritancePricelistIds(null);
        }
        if (property_exists($data, 'variantId') && $data->{'variantId'} !== null) {
            $object->setVariantId($data->{'variantId'});
        }
        elseif (property_exists($data, 'variantId') && $data->{'variantId'} === null) {
            $object->setVariantId(null);
        }
        if (property_exists($data, 'prices') && $data->{'prices'} !== null) {
            $values_2 = array();
            foreach ($data->{'prices'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel', 'json', $context);
            }
            $object->setPrices($values_2);
        }
        elseif (property_exists($data, 'prices') && $data->{'prices'} === null) {
            $object->setPrices(null);
        }
        if (property_exists($data, 'attributeValues') && $data->{'attributeValues'} !== null) {
            $values_3 = array();
            foreach ($data->{'attributeValues'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModel', 'json', $context);
            }
            $object->setAttributeValues($values_3);
        }
        elseif (property_exists($data, 'attributeValues') && $data->{'attributeValues'} === null) {
            $object->setAttributeValues(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        else {
            $data->{'sku'} = null;
        }
        if (null !== $object->getExternalId()) {
            $data->{'externalId'} = $object->getExternalId();
        }
        else {
            $data->{'externalId'} = null;
        }
        if (null !== $object->getExternalIdType()) {
            $data->{'externalIdType'} = $object->getExternalIdType();
        }
        else {
            $data->{'externalIdType'} = null;
        }
        if (null !== $object->getIsActive()) {
            $data->{'isActive'} = $object->getIsActive();
        }
        else {
            $data->{'isActive'} = null;
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        if (null !== $object->getStockStatusId()) {
            $data->{'stockStatusId'} = $object->getStockStatusId();
        }
        else {
            $data->{'stockStatusId'} = null;
        }
        if (null !== $object->getStockQuantity()) {
            $data->{'stockQuantity'} = $object->getStockQuantity();
        }
        else {
            $data->{'stockQuantity'} = null;
        }
        if (null !== $object->getWeightInKg()) {
            $data->{'weightInKg'} = $object->getWeightInKg();
        }
        else {
            $data->{'weightInKg'} = null;
        }
        if (null !== $object->getCostPrice()) {
            $data->{'costPrice'} = $object->getCostPrice();
        }
        else {
            $data->{'costPrice'} = null;
        }
        if (null !== $object->getEan()) {
            $data->{'ean'} = $object->getEan();
        }
        else {
            $data->{'ean'} = null;
        }
        if (null !== $object->getMpn()) {
            $data->{'mpn'} = $object->getMpn();
        }
        else {
            $data->{'mpn'} = null;
        }
        if (null !== $object->getImageFileId()) {
            $data->{'imageFileId'} = $object->getImageFileId();
        }
        else {
            $data->{'imageFileId'} = null;
        }
        if (null !== $object->getAttributeValueLinks()) {
            $values = array();
            foreach ($object->getAttributeValueLinks() as $value) {
                $values[] = $value;
            }
            $data->{'attributeValueLinks'} = $values;
        }
        else {
            $data->{'attributeValueLinks'} = null;
        }
        if (null !== $object->getVolumePricingInheritancePricelistIds()) {
            $values_1 = array();
            foreach ($object->getVolumePricingInheritancePricelistIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'volumePricingInheritancePricelistIds'} = $values_1;
        }
        else {
            $data->{'volumePricingInheritancePricelistIds'} = null;
        }
        if (null !== $object->getPrices()) {
            $values_2 = array();
            foreach ($object->getPrices() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'prices'} = $values_2;
        }
        else {
            $data->{'prices'} = null;
        }
        if (null !== $object->getAttributeValues()) {
            $values_3 = array();
            foreach ($object->getAttributeValues() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'attributeValues'} = $values_3;
        }
        else {
            $data->{'attributeValues'} = null;
        }
        return $data;
    }
}
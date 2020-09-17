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
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        if (property_exists($data, 'isActive') && $data->{'isActive'} !== null) {
            $object->setIsActive($data->{'isActive'});
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} !== null) {
            $object->setStockStatusId($data->{'stockStatusId'});
        }
        if (property_exists($data, 'stockQuantity') && $data->{'stockQuantity'} !== null) {
            $object->setStockQuantity($data->{'stockQuantity'});
        }
        if (property_exists($data, 'weightInKg') && $data->{'weightInKg'} !== null) {
            $object->setWeightInKg($data->{'weightInKg'});
        }
        if (property_exists($data, 'costPrice') && $data->{'costPrice'} !== null) {
            $object->setCostPrice($data->{'costPrice'});
        }
        if (property_exists($data, 'ean') && $data->{'ean'} !== null) {
            $object->setEan($data->{'ean'});
        }
        if (property_exists($data, 'mpn') && $data->{'mpn'} !== null) {
            $object->setMpn($data->{'mpn'});
        }
        if (property_exists($data, 'imageFileId') && $data->{'imageFileId'} !== null) {
            $object->setImageFileId($data->{'imageFileId'});
        }
        if (property_exists($data, 'attributeValueLinks') && $data->{'attributeValueLinks'} !== null) {
            $values = array();
            foreach ($data->{'attributeValueLinks'} as $value) {
                $values[] = $value;
            }
            $object->setAttributeValueLinks($values);
        }
        if (property_exists($data, 'volumePricingInheritancePricelistIds') && $data->{'volumePricingInheritancePricelistIds'} !== null) {
            $values_1 = array();
            foreach ($data->{'volumePricingInheritancePricelistIds'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVolumePricingInheritancePricelistIds($values_1);
        }
        if (property_exists($data, 'variantId') && $data->{'variantId'} !== null) {
            $object->setVariantId($data->{'variantId'});
        }
        if (property_exists($data, 'prices') && $data->{'prices'} !== null) {
            $values_2 = array();
            foreach ($data->{'prices'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel', 'json', $context);
            }
            $object->setPrices($values_2);
        }
        if (property_exists($data, 'attributeValues') && $data->{'attributeValues'} !== null) {
            $values_3 = array();
            foreach ($data->{'attributeValues'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductVariantAttributeValueModel', 'json', $context);
            }
            $object->setAttributeValues($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        $data->{'externalId'} = $object->getExternalId();
        $data->{'externalIdType'} = $object->getExternalIdType();
        $data->{'isActive'} = $object->getIsActive();
        $data->{'sortIndex'} = $object->getSortIndex();
        $data->{'stockStatusId'} = $object->getStockStatusId();
        $data->{'stockQuantity'} = $object->getStockQuantity();
        $data->{'weightInKg'} = $object->getWeightInKg();
        $data->{'costPrice'} = $object->getCostPrice();
        $data->{'ean'} = $object->getEan();
        $data->{'mpn'} = $object->getMpn();
        $data->{'imageFileId'} = $object->getImageFileId();
        if (null !== $object->getAttributeValueLinks()) {
            $values = array();
            foreach ($object->getAttributeValueLinks() as $value) {
                $values[] = $value;
            }
            $data->{'attributeValueLinks'} = $values;
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
        if (null !== $object->getAttributeValues()) {
            $values_3 = array();
            foreach ($object->getAttributeValues() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'attributeValues'} = $values_3;
        }
        return $data;
    }
}
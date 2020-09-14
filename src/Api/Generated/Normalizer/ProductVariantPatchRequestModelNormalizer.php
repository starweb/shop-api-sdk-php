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
class ProductVariantPatchRequestModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantPatchRequestModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantPatchRequestModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Starweb\Api\Generated\Model\ProductVariantPatchRequestModel();
        if (property_exists($data, 'sku')) {
            $object->setSku($data->{'sku'});
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
        return $data;
    }
}
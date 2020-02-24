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
class ProductVariantRequestModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantRequestModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantRequestModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\ProductVariantRequestModel();
        if (property_exists($data, 'sku')) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'isActive')) {
            $object->setIsActive($data->{'isActive'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'stockStatusId')) {
            $object->setStockStatusId($data->{'stockStatusId'});
        }
        if (property_exists($data, 'stockQuantity')) {
            $object->setStockQuantity($data->{'stockQuantity'});
        }
        if (property_exists($data, 'weightInKg')) {
            $object->setWeightInKg($data->{'weightInKg'});
        }
        if (property_exists($data, 'costPrice')) {
            $object->setCostPrice($data->{'costPrice'});
        }
        if (property_exists($data, 'ean')) {
            $object->setEan($data->{'ean'});
        }
        if (property_exists($data, 'mpn')) {
            $object->setMpn($data->{'mpn'});
        }
        if (property_exists($data, 'imageFileId')) {
            $object->setImageFileId($data->{'imageFileId'});
        }
        if (property_exists($data, 'attributeValueLinks')) {
            $values = array();
            foreach ($data->{'attributeValueLinks'} as $value) {
                $values[] = $value;
            }
            $object->setAttributeValueLinks($values);
        }
        if (property_exists($data, 'volumePricingInheritancePricelistIds')) {
            $values_1 = array();
            foreach ($data->{'volumePricingInheritancePricelistIds'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVolumePricingInheritancePricelistIds($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
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
        return $data;
    }
}
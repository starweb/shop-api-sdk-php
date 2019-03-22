<?php

namespace Starweb\Api\Client\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Client\\Model\\ProductVariantModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Client\Model\ProductVariantModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Client\Model\ProductVariantModel();
        if (property_exists($data, 'sku')) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'isActive')) {
            $object->setIsActive($data->{'isActive'});
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
        if (property_exists($data, 'prices')) {
            $values_1 = array();
            foreach ($data->{'prices'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Starweb\\Api\\Client\\Model\\ProductVariantPriceModel', 'json', $context);
            }
            $object->setPrices($values_1);
        }
        if (property_exists($data, 'attributes')) {
            $values_2 = array();
            foreach ($data->{'attributes'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeValueModel', 'json', $context);
            }
            $object->setAttributes($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getIsActive()) {
            $data->{'isActive'} = $object->getIsActive();
        }
        if (null !== $object->getStockStatusId()) {
            $data->{'stockStatusId'} = $object->getStockStatusId();
        }
        if (null !== $object->getStockQuantity()) {
            $data->{'stockQuantity'} = $object->getStockQuantity();
        }
        if (null !== $object->getWeightInKg()) {
            $data->{'weightInKg'} = $object->getWeightInKg();
        }
        if (null !== $object->getCostPrice()) {
            $data->{'costPrice'} = $object->getCostPrice();
        }
        if (null !== $object->getEan()) {
            $data->{'ean'} = $object->getEan();
        }
        if (null !== $object->getMpn()) {
            $data->{'mpn'} = $object->getMpn();
        }
        if (null !== $object->getImageFileId()) {
            $data->{'imageFileId'} = $object->getImageFileId();
        }
        if (null !== $object->getAttributeValueLinks()) {
            $values = array();
            foreach ($object->getAttributeValueLinks() as $value) {
                $values[] = $value;
            }
            $data->{'attributeValueLinks'} = $values;
        }
        if (null !== $object->getPrices()) {
            $values_1 = array();
            foreach ($object->getPrices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'prices'} = $values_1;
        }
        if (null !== $object->getAttributes()) {
            $values_2 = array();
            foreach ($object->getAttributes() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'attributes'} = $values_2;
        }
        return $data;
    }
}
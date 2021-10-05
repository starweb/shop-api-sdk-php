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
class ProductVariantPriceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductVariantPriceModel();
        if (property_exists($data, 'pricelistId') && $data->{'pricelistId'} !== null) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        elseif (property_exists($data, 'pricelistId') && $data->{'pricelistId'} === null) {
            $object->setPricelistId(null);
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
        if (property_exists($data, 'priceExVat') && $data->{'priceExVat'} !== null) {
            $object->setPriceExVat($data->{'priceExVat'});
        }
        elseif (property_exists($data, 'priceExVat') && $data->{'priceExVat'} === null) {
            $object->setPriceExVat(null);
        }
        if (property_exists($data, 'specialPriceExVat') && $data->{'specialPriceExVat'} !== null) {
            $object->setSpecialPriceExVat($data->{'specialPriceExVat'});
        }
        elseif (property_exists($data, 'specialPriceExVat') && $data->{'specialPriceExVat'} === null) {
            $object->setSpecialPriceExVat(null);
        }
        if (property_exists($data, 'volumePrices') && $data->{'volumePrices'} !== null) {
            $values = array();
            foreach ($data->{'volumePrices'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\ProductVariantVolumePriceModel', 'json', $context);
            }
            $object->setVolumePrices($values);
        }
        elseif (property_exists($data, 'volumePrices') && $data->{'volumePrices'} === null) {
            $object->setVolumePrices(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPricelistId()) {
            $data->{'pricelistId'} = $object->getPricelistId();
        }
        else {
            $data->{'pricelistId'} = null;
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
        if (null !== $object->getPriceExVat()) {
            $data->{'priceExVat'} = $object->getPriceExVat();
        }
        else {
            $data->{'priceExVat'} = null;
        }
        if (null !== $object->getSpecialPriceExVat()) {
            $data->{'specialPriceExVat'} = $object->getSpecialPriceExVat();
        }
        else {
            $data->{'specialPriceExVat'} = null;
        }
        if (null !== $object->getVolumePrices()) {
            $values = array();
            foreach ($object->getVolumePrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'volumePrices'} = $values;
        }
        else {
            $data->{'volumePrices'} = null;
        }
        return $data;
    }
}
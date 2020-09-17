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
class PricelistModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\PricelistModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\PricelistModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\PricelistModel();
        if (property_exists($data, 'pricelistId') && $data->{'pricelistId'} !== null) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'isMaster') && $data->{'isMaster'} !== null) {
            $object->setIsMaster($data->{'isMaster'});
        }
        if (property_exists($data, 'isActive') && $data->{'isActive'} !== null) {
            $object->setIsActive($data->{'isActive'});
        }
        if (property_exists($data, 'region') && $data->{'region'} !== null) {
            $object->setRegion($data->{'region'});
        }
        if (property_exists($data, 'countryCodes') && $data->{'countryCodes'} !== null) {
            $values = array();
            foreach ($data->{'countryCodes'} as $value) {
                $values[] = $value;
            }
            $object->setCountryCodes($values);
        }
        if (property_exists($data, 'currencyCode') && $data->{'currencyCode'} !== null) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'parentPricelistId') && $data->{'parentPricelistId'} !== null) {
            $object->setParentPricelistId($data->{'parentPricelistId'});
        }
        if (property_exists($data, 'isCustomerPricelist') && $data->{'isCustomerPricelist'} !== null) {
            $object->setIsCustomerPricelist($data->{'isCustomerPricelist'});
        }
        if (property_exists($data, 'isCountryPricelist') && $data->{'isCountryPricelist'} !== null) {
            $object->setIsCountryPricelist($data->{'isCountryPricelist'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'externalId'} = $object->getExternalId();
        $data->{'externalIdType'} = $object->getExternalIdType();
        $data->{'parentPricelistId'} = $object->getParentPricelistId();
        if (null !== $object->getIsCustomerPricelist()) {
            $data->{'isCustomerPricelist'} = $object->getIsCustomerPricelist();
        }
        if (null !== $object->getIsCountryPricelist()) {
            $data->{'isCountryPricelist'} = $object->getIsCountryPricelist();
        }
        return $data;
    }
}
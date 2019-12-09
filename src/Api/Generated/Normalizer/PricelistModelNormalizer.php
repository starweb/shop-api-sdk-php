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
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\PricelistModel();
        if (property_exists($data, 'pricelistId')) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        if (property_exists($data, 'externalId')) {
            $object->setExternalId($data->{'externalId'});
        }
        if (property_exists($data, 'externalIdType')) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'isMaster')) {
            $object->setIsMaster($data->{'isMaster'});
        }
        if (property_exists($data, 'isActive')) {
            $object->setIsActive($data->{'isActive'});
        }
        if (property_exists($data, 'region')) {
            $object->setRegion($data->{'region'});
        }
        if (property_exists($data, 'countryCodes')) {
            $values = array();
            foreach ($data->{'countryCodes'} as $value) {
                $values[] = $value;
            }
            $object->setCountryCodes($values);
        }
        if (property_exists($data, 'currencyCode')) {
            $object->setCurrencyCode($data->{'currencyCode'});
        }
        if (property_exists($data, 'parentPricelistId')) {
            $object->setParentPricelistId($data->{'parentPricelistId'});
        }
        if (property_exists($data, 'isCustomerPricelist')) {
            $object->setIsCustomerPricelist($data->{'isCustomerPricelist'});
        }
        if (property_exists($data, 'isCountryPricelist')) {
            $object->setIsCountryPricelist($data->{'isCountryPricelist'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPricelistId()) {
            $data->{'pricelistId'} = $object->getPricelistId();
        }
        $data->{'externalId'} = $object->getExternalId();
        $data->{'externalIdType'} = $object->getExternalIdType();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getIsMaster()) {
            $data->{'isMaster'} = $object->getIsMaster();
        }
        if (null !== $object->getIsActive()) {
            $data->{'isActive'} = $object->getIsActive();
        }
        if (null !== $object->getRegion()) {
            $data->{'region'} = $object->getRegion();
        }
        if (null !== $object->getCountryCodes()) {
            $values = array();
            foreach ($object->getCountryCodes() as $value) {
                $values[] = $value;
            }
            $data->{'countryCodes'} = $values;
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'currencyCode'} = $object->getCurrencyCode();
        }
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
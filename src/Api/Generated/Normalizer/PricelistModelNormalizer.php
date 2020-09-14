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
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Starweb\Api\Generated\Model\PricelistModel();
        if (property_exists($data, 'pricelistId')) {
            $object->setPricelistId($data->{'pricelistId'});
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
        if (property_exists($data, 'parentPricelistId') && $data->{'parentPricelistId'} !== null) {
            $object->setParentPricelistId($data->{'parentPricelistId'});
        }
        elseif (property_exists($data, 'parentPricelistId') && $data->{'parentPricelistId'} === null) {
            $object->setParentPricelistId(null);
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
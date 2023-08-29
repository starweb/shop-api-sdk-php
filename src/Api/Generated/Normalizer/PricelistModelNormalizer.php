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
class PricelistModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\PricelistModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\PricelistModel';
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
        $object = new \Starweb\Api\Generated\Model\PricelistModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pricelistId', $data)) {
            $object->setPricelistId($data['pricelistId']);
            unset($data['pricelistId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('isMaster', $data)) {
            $object->setIsMaster($data['isMaster']);
            unset($data['isMaster']);
        }
        if (\array_key_exists('isActive', $data)) {
            $object->setIsActive($data['isActive']);
            unset($data['isActive']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('countryCodes', $data)) {
            $values = array();
            foreach ($data['countryCodes'] as $value) {
                $values[] = $value;
            }
            $object->setCountryCodes($values);
            unset($data['countryCodes']);
        }
        if (\array_key_exists('currencyCode', $data)) {
            $object->setCurrencyCode($data['currencyCode']);
            unset($data['currencyCode']);
        }
        if (\array_key_exists('parentPricelistId', $data)) {
            $object->setParentPricelistId($data['parentPricelistId']);
            unset($data['parentPricelistId']);
        }
        if (\array_key_exists('isCustomerPricelist', $data)) {
            $object->setIsCustomerPricelist($data['isCustomerPricelist']);
            unset($data['isCustomerPricelist']);
        }
        if (\array_key_exists('isCountryPricelist', $data)) {
            $object->setIsCountryPricelist($data['isCountryPricelist']);
            unset($data['isCountryPricelist']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('parentPricelistId') && null !== $object->getParentPricelistId()) {
            $data['parentPricelistId'] = $object->getParentPricelistId();
        }
        if ($object->isInitialized('isCustomerPricelist') && null !== $object->getIsCustomerPricelist()) {
            $data['isCustomerPricelist'] = $object->getIsCustomerPricelist();
        }
        if ($object->isInitialized('isCountryPricelist') && null !== $object->getIsCountryPricelist()) {
            $data['isCountryPricelist'] = $object->getIsCountryPricelist();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\PricelistModel' => false);
    }
}
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
class AddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\AddressModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\AddressModel';
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
        $object = new \Starweb\Api\Generated\Model\AddressModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
            unset($data['companyName']);
        }
        if (\array_key_exists('firstName', $data)) {
            $object->setFirstName($data['firstName']);
            unset($data['firstName']);
        }
        if (\array_key_exists('lastName', $data)) {
            $object->setLastName($data['lastName']);
            unset($data['lastName']);
        }
        if (\array_key_exists('careOf', $data)) {
            $object->setCareOf($data['careOf']);
            unset($data['careOf']);
        }
        if (\array_key_exists('attention', $data)) {
            $object->setAttention($data['attention']);
            unset($data['attention']);
        }
        if (\array_key_exists('reference', $data)) {
            $object->setReference($data['reference']);
            unset($data['reference']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
            unset($data['address']);
        }
        if (\array_key_exists('postalCode', $data)) {
            $object->setPostalCode($data['postalCode']);
            unset($data['postalCode']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
            unset($data['city']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        if (\array_key_exists('phoneNo', $data)) {
            $object->setPhoneNo($data['phoneNo']);
            unset($data['phoneNo']);
        }
        if (\array_key_exists('mobilePhoneNo', $data)) {
            $object->setMobilePhoneNo($data['mobilePhoneNo']);
            unset($data['mobilePhoneNo']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
            $data['companyName'] = $object->getCompanyName();
        }
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if ($object->isInitialized('careOf') && null !== $object->getCareOf()) {
            $data['careOf'] = $object->getCareOf();
        }
        if ($object->isInitialized('attention') && null !== $object->getAttention()) {
            $data['attention'] = $object->getAttention();
        }
        if ($object->isInitialized('reference') && null !== $object->getReference()) {
            $data['reference'] = $object->getReference();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
            $data['postalCode'] = $object->getPostalCode();
        }
        if ($object->isInitialized('city') && null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if ($object->isInitialized('state') && null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
            $data['countryCode'] = $object->getCountryCode();
        }
        if ($object->isInitialized('phoneNo') && null !== $object->getPhoneNo()) {
            $data['phoneNo'] = $object->getPhoneNo();
        }
        if ($object->isInitialized('mobilePhoneNo') && null !== $object->getMobilePhoneNo()) {
            $data['mobilePhoneNo'] = $object->getMobilePhoneNo();
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
        return array('Starweb\\Api\\Generated\\Model\\AddressModel' => false);
    }
}
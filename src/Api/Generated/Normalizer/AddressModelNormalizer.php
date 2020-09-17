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
class AddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\AddressModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\AddressModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\AddressModel();
        if (property_exists($data, 'companyName') && $data->{'companyName'} !== null) {
            $object->setCompanyName($data->{'companyName'});
        }
        if (property_exists($data, 'firstName') && $data->{'firstName'} !== null) {
            $object->setFirstName($data->{'firstName'});
        }
        if (property_exists($data, 'lastName') && $data->{'lastName'} !== null) {
            $object->setLastName($data->{'lastName'});
        }
        if (property_exists($data, 'careOf') && $data->{'careOf'} !== null) {
            $object->setCareOf($data->{'careOf'});
        }
        if (property_exists($data, 'attention') && $data->{'attention'} !== null) {
            $object->setAttention($data->{'attention'});
        }
        if (property_exists($data, 'reference') && $data->{'reference'} !== null) {
            $object->setReference($data->{'reference'});
        }
        if (property_exists($data, 'address') && $data->{'address'} !== null) {
            $object->setAddress($data->{'address'});
        }
        if (property_exists($data, 'postalCode') && $data->{'postalCode'} !== null) {
            $object->setPostalCode($data->{'postalCode'});
        }
        if (property_exists($data, 'city') && $data->{'city'} !== null) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'state') && $data->{'state'} !== null) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'countryCode') && $data->{'countryCode'} !== null) {
            $object->setCountryCode($data->{'countryCode'});
        }
        if (property_exists($data, 'phoneNo') && $data->{'phoneNo'} !== null) {
            $object->setPhoneNo($data->{'phoneNo'});
        }
        if (property_exists($data, 'mobilePhoneNo') && $data->{'mobilePhoneNo'} !== null) {
            $object->setMobilePhoneNo($data->{'mobilePhoneNo'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCompanyName()) {
            $data->{'companyName'} = $object->getCompanyName();
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
        }
        if (null !== $object->getCareOf()) {
            $data->{'careOf'} = $object->getCareOf();
        }
        if (null !== $object->getAttention()) {
            $data->{'attention'} = $object->getAttention();
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $object->getAddress();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postalCode'} = $object->getPostalCode();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getCountryCode()) {
            $data->{'countryCode'} = $object->getCountryCode();
        }
        if (null !== $object->getPhoneNo()) {
            $data->{'phoneNo'} = $object->getPhoneNo();
        }
        if (null !== $object->getMobilePhoneNo()) {
            $data->{'mobilePhoneNo'} = $object->getMobilePhoneNo();
        }
        return $data;
    }
}
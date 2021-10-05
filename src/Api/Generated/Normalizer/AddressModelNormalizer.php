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
        elseif (property_exists($data, 'companyName') && $data->{'companyName'} === null) {
            $object->setCompanyName(null);
        }
        if (property_exists($data, 'firstName') && $data->{'firstName'} !== null) {
            $object->setFirstName($data->{'firstName'});
        }
        elseif (property_exists($data, 'firstName') && $data->{'firstName'} === null) {
            $object->setFirstName(null);
        }
        if (property_exists($data, 'lastName') && $data->{'lastName'} !== null) {
            $object->setLastName($data->{'lastName'});
        }
        elseif (property_exists($data, 'lastName') && $data->{'lastName'} === null) {
            $object->setLastName(null);
        }
        if (property_exists($data, 'careOf') && $data->{'careOf'} !== null) {
            $object->setCareOf($data->{'careOf'});
        }
        elseif (property_exists($data, 'careOf') && $data->{'careOf'} === null) {
            $object->setCareOf(null);
        }
        if (property_exists($data, 'attention') && $data->{'attention'} !== null) {
            $object->setAttention($data->{'attention'});
        }
        elseif (property_exists($data, 'attention') && $data->{'attention'} === null) {
            $object->setAttention(null);
        }
        if (property_exists($data, 'reference') && $data->{'reference'} !== null) {
            $object->setReference($data->{'reference'});
        }
        elseif (property_exists($data, 'reference') && $data->{'reference'} === null) {
            $object->setReference(null);
        }
        if (property_exists($data, 'address') && $data->{'address'} !== null) {
            $object->setAddress($data->{'address'});
        }
        elseif (property_exists($data, 'address') && $data->{'address'} === null) {
            $object->setAddress(null);
        }
        if (property_exists($data, 'postalCode') && $data->{'postalCode'} !== null) {
            $object->setPostalCode($data->{'postalCode'});
        }
        elseif (property_exists($data, 'postalCode') && $data->{'postalCode'} === null) {
            $object->setPostalCode(null);
        }
        if (property_exists($data, 'city') && $data->{'city'} !== null) {
            $object->setCity($data->{'city'});
        }
        elseif (property_exists($data, 'city') && $data->{'city'} === null) {
            $object->setCity(null);
        }
        if (property_exists($data, 'state') && $data->{'state'} !== null) {
            $object->setState($data->{'state'});
        }
        elseif (property_exists($data, 'state') && $data->{'state'} === null) {
            $object->setState(null);
        }
        if (property_exists($data, 'countryCode') && $data->{'countryCode'} !== null) {
            $object->setCountryCode($data->{'countryCode'});
        }
        elseif (property_exists($data, 'countryCode') && $data->{'countryCode'} === null) {
            $object->setCountryCode(null);
        }
        if (property_exists($data, 'phoneNo') && $data->{'phoneNo'} !== null) {
            $object->setPhoneNo($data->{'phoneNo'});
        }
        elseif (property_exists($data, 'phoneNo') && $data->{'phoneNo'} === null) {
            $object->setPhoneNo(null);
        }
        if (property_exists($data, 'mobilePhoneNo') && $data->{'mobilePhoneNo'} !== null) {
            $object->setMobilePhoneNo($data->{'mobilePhoneNo'});
        }
        elseif (property_exists($data, 'mobilePhoneNo') && $data->{'mobilePhoneNo'} === null) {
            $object->setMobilePhoneNo(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCompanyName()) {
            $data->{'companyName'} = $object->getCompanyName();
        }
        else {
            $data->{'companyName'} = null;
        }
        if (null !== $object->getFirstName()) {
            $data->{'firstName'} = $object->getFirstName();
        }
        else {
            $data->{'firstName'} = null;
        }
        if (null !== $object->getLastName()) {
            $data->{'lastName'} = $object->getLastName();
        }
        else {
            $data->{'lastName'} = null;
        }
        if (null !== $object->getCareOf()) {
            $data->{'careOf'} = $object->getCareOf();
        }
        else {
            $data->{'careOf'} = null;
        }
        if (null !== $object->getAttention()) {
            $data->{'attention'} = $object->getAttention();
        }
        else {
            $data->{'attention'} = null;
        }
        if (null !== $object->getReference()) {
            $data->{'reference'} = $object->getReference();
        }
        else {
            $data->{'reference'} = null;
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $object->getAddress();
        }
        else {
            $data->{'address'} = null;
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postalCode'} = $object->getPostalCode();
        }
        else {
            $data->{'postalCode'} = null;
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        else {
            $data->{'city'} = null;
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        else {
            $data->{'state'} = null;
        }
        if (null !== $object->getCountryCode()) {
            $data->{'countryCode'} = $object->getCountryCode();
        }
        else {
            $data->{'countryCode'} = null;
        }
        if (null !== $object->getPhoneNo()) {
            $data->{'phoneNo'} = $object->getPhoneNo();
        }
        else {
            $data->{'phoneNo'} = null;
        }
        if (null !== $object->getMobilePhoneNo()) {
            $data->{'mobilePhoneNo'} = $object->getMobilePhoneNo();
        }
        else {
            $data->{'mobilePhoneNo'} = null;
        }
        return $data;
    }
}
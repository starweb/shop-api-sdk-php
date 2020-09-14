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
class CustomerUpdateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\CustomerUpdateModel();
        if (property_exists($data, 'customerId') && $data->{'customerId'} !== null) {
            $object->setCustomerId($data->{'customerId'});
        }
        elseif (property_exists($data, 'customerId') && $data->{'customerId'} === null) {
            $object->setCustomerId(null);
        }
        if (property_exists($data, 'createdAt') && $data->{'createdAt'} !== null) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        elseif (property_exists($data, 'createdAt') && $data->{'createdAt'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        elseif (property_exists($data, 'type') && $data->{'type'} === null) {
            $object->setType(null);
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        }
        elseif (property_exists($data, 'email') && $data->{'email'} === null) {
            $object->setEmail(null);
        }
        if (property_exists($data, 'nationalIdNo') && $data->{'nationalIdNo'} !== null) {
            $object->setNationalIdNo($data->{'nationalIdNo'});
        }
        elseif (property_exists($data, 'nationalIdNo') && $data->{'nationalIdNo'} === null) {
            $object->setNationalIdNo(null);
        }
        if (property_exists($data, 'vatNo') && $data->{'vatNo'} !== null) {
            $object->setVatNo($data->{'vatNo'});
        }
        elseif (property_exists($data, 'vatNo') && $data->{'vatNo'} === null) {
            $object->setVatNo(null);
        }
        if (property_exists($data, 'customInfo1') && $data->{'customInfo1'} !== null) {
            $object->setCustomInfo1($data->{'customInfo1'});
        }
        elseif (property_exists($data, 'customInfo1') && $data->{'customInfo1'} === null) {
            $object->setCustomInfo1(null);
        }
        if (property_exists($data, 'customInfo2') && $data->{'customInfo2'} !== null) {
            $object->setCustomInfo2($data->{'customInfo2'});
        }
        elseif (property_exists($data, 'customInfo2') && $data->{'customInfo2'} === null) {
            $object->setCustomInfo2(null);
        }
        if (property_exists($data, 'pricelistId') && $data->{'pricelistId'} !== null) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        elseif (property_exists($data, 'pricelistId') && $data->{'pricelistId'} === null) {
            $object->setPricelistId(null);
        }
        if (property_exists($data, 'langCode') && $data->{'langCode'} !== null) {
            $object->setLangCode($data->{'langCode'});
        }
        elseif (property_exists($data, 'langCode') && $data->{'langCode'} === null) {
            $object->setLangCode(null);
        }
        if (property_exists($data, 'addresses') && $data->{'addresses'} !== null) {
            $object->setAddresses($this->denormalizer->denormalize($data->{'addresses'}, 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModelAddresses', 'json', $context));
        }
        elseif (property_exists($data, 'addresses') && $data->{'addresses'} === null) {
            $object->setAddresses(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        else {
            $data->{'createdAt'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        else {
            $data->{'type'} = null;
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        else {
            $data->{'email'} = null;
        }
        if (null !== $object->getNationalIdNo()) {
            $data->{'nationalIdNo'} = $object->getNationalIdNo();
        }
        else {
            $data->{'nationalIdNo'} = null;
        }
        if (null !== $object->getVatNo()) {
            $data->{'vatNo'} = $object->getVatNo();
        }
        else {
            $data->{'vatNo'} = null;
        }
        if (null !== $object->getCustomInfo1()) {
            $data->{'customInfo1'} = $object->getCustomInfo1();
        }
        else {
            $data->{'customInfo1'} = null;
        }
        if (null !== $object->getCustomInfo2()) {
            $data->{'customInfo2'} = $object->getCustomInfo2();
        }
        else {
            $data->{'customInfo2'} = null;
        }
        if (null !== $object->getPricelistId()) {
            $data->{'pricelistId'} = $object->getPricelistId();
        }
        else {
            $data->{'pricelistId'} = null;
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        else {
            $data->{'addresses'} = null;
        }
        return $data;
    }
}
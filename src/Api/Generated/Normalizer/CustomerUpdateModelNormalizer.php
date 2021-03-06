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
        return get_class($data) === 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\CustomerUpdateModel();
        if (property_exists($data, 'customerId')) {
            $object->setCustomerId($data->{'customerId'});
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'nationalIdNo')) {
            $object->setNationalIdNo($data->{'nationalIdNo'});
        }
        if (property_exists($data, 'vatNo')) {
            $object->setVatNo($data->{'vatNo'});
        }
        if (property_exists($data, 'customInfo1')) {
            $object->setCustomInfo1($data->{'customInfo1'});
        }
        if (property_exists($data, 'customInfo2')) {
            $object->setCustomInfo2($data->{'customInfo2'});
        }
        if (property_exists($data, 'pricelistId')) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        if (property_exists($data, 'langCode')) {
            $object->setLangCode($data->{'langCode'});
        }
        if (property_exists($data, 'addresses')) {
            $object->setAddresses($this->denormalizer->denormalize($data->{'addresses'}, 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModelAddresses', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCustomerId()) {
            $data->{'customerId'} = $object->getCustomerId();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getNationalIdNo()) {
            $data->{'nationalIdNo'} = $object->getNationalIdNo();
        }
        if (null !== $object->getVatNo()) {
            $data->{'vatNo'} = $object->getVatNo();
        }
        if (null !== $object->getCustomInfo1()) {
            $data->{'customInfo1'} = $object->getCustomInfo1();
        }
        if (null !== $object->getCustomInfo2()) {
            $data->{'customInfo2'} = $object->getCustomInfo2();
        }
        $data->{'pricelistId'} = $object->getPricelistId();
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        if (null !== $object->getAddresses()) {
            $data->{'addresses'} = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
        }
        return $data;
    }
}
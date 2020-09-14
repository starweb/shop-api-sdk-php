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
class CustomerUpdateModelAddressesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModelAddresses';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModelAddresses';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\CustomerUpdateModelAddresses();
        if (property_exists($data, 'invoice') && $data->{'invoice'} !== null) {
            $object->setInvoice($this->denormalizer->denormalize($data->{'invoice'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'invoice') && $data->{'invoice'} === null) {
            $object->setInvoice(null);
        }
        if (property_exists($data, 'delivery') && $data->{'delivery'} !== null) {
            $object->setDelivery($this->denormalizer->denormalize($data->{'delivery'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'delivery') && $data->{'delivery'} === null) {
            $object->setDelivery(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getInvoice()) {
            $data->{'invoice'} = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        else {
            $data->{'invoice'} = null;
        }
        if (null !== $object->getDelivery()) {
            $data->{'delivery'} = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        else {
            $data->{'delivery'} = null;
        }
        return $data;
    }
}
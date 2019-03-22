<?php

namespace Starweb\Api\Client\Normalizer;

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
        return $type === 'Starweb\\Api\\Client\\Model\\CustomerUpdateModelAddresses';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Client\Model\CustomerUpdateModelAddresses;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Client\Model\CustomerUpdateModelAddresses();
        if (property_exists($data, 'invoice')) {
            $object->setInvoice($this->denormalizer->denormalize($data->{'invoice'}, 'Starweb\\Api\\Client\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'delivery')) {
            $object->setDelivery($this->denormalizer->denormalize($data->{'delivery'}, 'Starweb\\Api\\Client\\Model\\AddressModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getInvoice()) {
            $data->{'invoice'} = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if (null !== $object->getDelivery()) {
            $data->{'delivery'} = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        return $data;
    }
}
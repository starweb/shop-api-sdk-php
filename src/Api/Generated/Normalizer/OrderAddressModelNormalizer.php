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
class OrderAddressModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderAddressModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderAddressModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\OrderAddressModel();
        if (property_exists($data, 'originalInvoice')) {
            $object->setOriginalInvoice($this->denormalizer->denormalize($data->{'originalInvoice'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'originalDelivery')) {
            $object->setOriginalDelivery($this->denormalizer->denormalize($data->{'originalDelivery'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'customerInvoice')) {
            $object->setCustomerInvoice($this->denormalizer->denormalize($data->{'customerInvoice'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'customerDelivery')) {
            $object->setCustomerDelivery($this->denormalizer->denormalize($data->{'customerDelivery'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'paymentMethodInvoice')) {
            $object->setPaymentMethodInvoice($this->denormalizer->denormalize($data->{'paymentMethodInvoice'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        if (property_exists($data, 'paymentMethodDelivery')) {
            $object->setPaymentMethodDelivery($this->denormalizer->denormalize($data->{'paymentMethodDelivery'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        return $data;
    }
}
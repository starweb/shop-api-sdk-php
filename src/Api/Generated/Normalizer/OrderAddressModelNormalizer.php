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
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderAddressModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\OrderAddressModel();
        if (property_exists($data, 'originalInvoice') && $data->{'originalInvoice'} !== null) {
            $object->setOriginalInvoice($this->denormalizer->denormalize($data->{'originalInvoice'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'originalInvoice') && $data->{'originalInvoice'} === null) {
            $object->setOriginalInvoice(null);
        }
        if (property_exists($data, 'originalDelivery') && $data->{'originalDelivery'} !== null) {
            $object->setOriginalDelivery($this->denormalizer->denormalize($data->{'originalDelivery'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'originalDelivery') && $data->{'originalDelivery'} === null) {
            $object->setOriginalDelivery(null);
        }
        if (property_exists($data, 'customerInvoice') && $data->{'customerInvoice'} !== null) {
            $object->setCustomerInvoice($this->denormalizer->denormalize($data->{'customerInvoice'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'customerInvoice') && $data->{'customerInvoice'} === null) {
            $object->setCustomerInvoice(null);
        }
        if (property_exists($data, 'customerDelivery') && $data->{'customerDelivery'} !== null) {
            $object->setCustomerDelivery($this->denormalizer->denormalize($data->{'customerDelivery'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'customerDelivery') && $data->{'customerDelivery'} === null) {
            $object->setCustomerDelivery(null);
        }
        if (property_exists($data, 'paymentMethodInvoice') && $data->{'paymentMethodInvoice'} !== null) {
            $object->setPaymentMethodInvoice($this->denormalizer->denormalize($data->{'paymentMethodInvoice'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'paymentMethodInvoice') && $data->{'paymentMethodInvoice'} === null) {
            $object->setPaymentMethodInvoice(null);
        }
        if (property_exists($data, 'paymentMethodDelivery') && $data->{'paymentMethodDelivery'} !== null) {
            $object->setPaymentMethodDelivery($this->denormalizer->denormalize($data->{'paymentMethodDelivery'}, 'Starweb\\Api\\Generated\\Model\\AddressModel', 'json', $context));
        }
        elseif (property_exists($data, 'paymentMethodDelivery') && $data->{'paymentMethodDelivery'} === null) {
            $object->setPaymentMethodDelivery(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getOriginalInvoice()) {
            $data->{'originalInvoice'} = $this->normalizer->normalize($object->getOriginalInvoice(), 'json', $context);
        }
        else {
            $data->{'originalInvoice'} = null;
        }
        if (null !== $object->getOriginalDelivery()) {
            $data->{'originalDelivery'} = $this->normalizer->normalize($object->getOriginalDelivery(), 'json', $context);
        }
        else {
            $data->{'originalDelivery'} = null;
        }
        if (null !== $object->getCustomerInvoice()) {
            $data->{'customerInvoice'} = $this->normalizer->normalize($object->getCustomerInvoice(), 'json', $context);
        }
        else {
            $data->{'customerInvoice'} = null;
        }
        if (null !== $object->getCustomerDelivery()) {
            $data->{'customerDelivery'} = $this->normalizer->normalize($object->getCustomerDelivery(), 'json', $context);
        }
        else {
            $data->{'customerDelivery'} = null;
        }
        if (null !== $object->getPaymentMethodInvoice()) {
            $data->{'paymentMethodInvoice'} = $this->normalizer->normalize($object->getPaymentMethodInvoice(), 'json', $context);
        }
        else {
            $data->{'paymentMethodInvoice'} = null;
        }
        if (null !== $object->getPaymentMethodDelivery()) {
            $data->{'paymentMethodDelivery'} = $this->normalizer->normalize($object->getPaymentMethodDelivery(), 'json', $context);
        }
        else {
            $data->{'paymentMethodDelivery'} = null;
        }
        return $data;
    }
}
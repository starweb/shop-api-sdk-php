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
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\OrderAddressModel();
        if (property_exists($data, 'originalInvoice')) {
            $object->setOriginalInvoice($data->{'originalInvoice'});
        }
        if (property_exists($data, 'originalDelivery')) {
            $object->setOriginalDelivery($data->{'originalDelivery'});
        }
        if (property_exists($data, 'customerInvoice')) {
            $object->setCustomerInvoice($data->{'customerInvoice'});
        }
        if (property_exists($data, 'customerDelivery')) {
            $object->setCustomerDelivery($data->{'customerDelivery'});
        }
        if (property_exists($data, 'paymentMethodInvoice')) {
            $object->setPaymentMethodInvoice($data->{'paymentMethodInvoice'});
        }
        if (property_exists($data, 'paymentMethodDelivery')) {
            $object->setPaymentMethodDelivery($data->{'paymentMethodDelivery'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getOriginalInvoice()) {
            $data->{'originalInvoice'} = $object->getOriginalInvoice();
        }
        if (null !== $object->getOriginalDelivery()) {
            $data->{'originalDelivery'} = $object->getOriginalDelivery();
        }
        if (null !== $object->getCustomerInvoice()) {
            $data->{'customerInvoice'} = $object->getCustomerInvoice();
        }
        if (null !== $object->getCustomerDelivery()) {
            $data->{'customerDelivery'} = $object->getCustomerDelivery();
        }
        if (null !== $object->getPaymentMethodInvoice()) {
            $data->{'paymentMethodInvoice'} = $object->getPaymentMethodInvoice();
        }
        if (null !== $object->getPaymentMethodDelivery()) {
            $data->{'paymentMethodDelivery'} = $object->getPaymentMethodDelivery();
        }
        return $data;
    }
}
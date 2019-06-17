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
class VatRateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\VatRateModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Generated\Model\VatRateModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\VatRateModel();
        if (property_exists($data, 'countryCode')) {
            $object->setCountryCode($data->{'countryCode'});
        }
        if (property_exists($data, 'defaultVatRate')) {
            $object->setDefaultVatRate($data->{'defaultVatRate'});
        }
        if (property_exists($data, 'fixedOrderPaymentVatRate')) {
            $object->setFixedOrderPaymentVatRate($data->{'fixedOrderPaymentVatRate'});
        }
        if (property_exists($data, 'fixedOrderShippingVatRate')) {
            $object->setFixedOrderShippingVatRate($data->{'fixedOrderShippingVatRate'});
        }
        if (property_exists($data, 'fixedOrderDiscountVatRate')) {
            $object->setFixedOrderDiscountVatRate($data->{'fixedOrderDiscountVatRate'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCountryCode()) {
            $data->{'countryCode'} = $object->getCountryCode();
        }
        if (null !== $object->getDefaultVatRate()) {
            $data->{'defaultVatRate'} = $object->getDefaultVatRate();
        }
        if (null !== $object->getFixedOrderPaymentVatRate()) {
            $data->{'fixedOrderPaymentVatRate'} = $object->getFixedOrderPaymentVatRate();
        }
        if (null !== $object->getFixedOrderShippingVatRate()) {
            $data->{'fixedOrderShippingVatRate'} = $object->getFixedOrderShippingVatRate();
        }
        if (null !== $object->getFixedOrderDiscountVatRate()) {
            $data->{'fixedOrderDiscountVatRate'} = $object->getFixedOrderDiscountVatRate();
        }
        return $data;
    }
}
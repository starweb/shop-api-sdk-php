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
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\VatRateModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\VatRateModel();
        if (property_exists($data, 'countryCode') && $data->{'countryCode'} !== null) {
            $object->setCountryCode($data->{'countryCode'});
        }
        elseif (property_exists($data, 'countryCode') && $data->{'countryCode'} === null) {
            $object->setCountryCode(null);
        }
        if (property_exists($data, 'defaultVatRate') && $data->{'defaultVatRate'} !== null) {
            $object->setDefaultVatRate($data->{'defaultVatRate'});
        }
        elseif (property_exists($data, 'defaultVatRate') && $data->{'defaultVatRate'} === null) {
            $object->setDefaultVatRate(null);
        }
        if (property_exists($data, 'fixedOrderPaymentVatRate') && $data->{'fixedOrderPaymentVatRate'} !== null) {
            $object->setFixedOrderPaymentVatRate($data->{'fixedOrderPaymentVatRate'});
        }
        elseif (property_exists($data, 'fixedOrderPaymentVatRate') && $data->{'fixedOrderPaymentVatRate'} === null) {
            $object->setFixedOrderPaymentVatRate(null);
        }
        if (property_exists($data, 'fixedOrderShippingVatRate') && $data->{'fixedOrderShippingVatRate'} !== null) {
            $object->setFixedOrderShippingVatRate($data->{'fixedOrderShippingVatRate'});
        }
        elseif (property_exists($data, 'fixedOrderShippingVatRate') && $data->{'fixedOrderShippingVatRate'} === null) {
            $object->setFixedOrderShippingVatRate(null);
        }
        if (property_exists($data, 'fixedOrderDiscountVatRate') && $data->{'fixedOrderDiscountVatRate'} !== null) {
            $object->setFixedOrderDiscountVatRate($data->{'fixedOrderDiscountVatRate'});
        }
        elseif (property_exists($data, 'fixedOrderDiscountVatRate') && $data->{'fixedOrderDiscountVatRate'} === null) {
            $object->setFixedOrderDiscountVatRate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCountryCode()) {
            $data->{'countryCode'} = $object->getCountryCode();
        }
        else {
            $data->{'countryCode'} = null;
        }
        if (null !== $object->getDefaultVatRate()) {
            $data->{'defaultVatRate'} = $object->getDefaultVatRate();
        }
        else {
            $data->{'defaultVatRate'} = null;
        }
        if (null !== $object->getFixedOrderPaymentVatRate()) {
            $data->{'fixedOrderPaymentVatRate'} = $object->getFixedOrderPaymentVatRate();
        }
        else {
            $data->{'fixedOrderPaymentVatRate'} = null;
        }
        if (null !== $object->getFixedOrderShippingVatRate()) {
            $data->{'fixedOrderShippingVatRate'} = $object->getFixedOrderShippingVatRate();
        }
        else {
            $data->{'fixedOrderShippingVatRate'} = null;
        }
        if (null !== $object->getFixedOrderDiscountVatRate()) {
            $data->{'fixedOrderDiscountVatRate'} = $object->getFixedOrderDiscountVatRate();
        }
        else {
            $data->{'fixedOrderDiscountVatRate'} = null;
        }
        return $data;
    }
}
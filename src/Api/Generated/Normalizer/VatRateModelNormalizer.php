<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Starweb\Api\Generated\Runtime\Normalizer\CheckArray;
use Starweb\Api\Generated\Runtime\Normalizer\ValidatorTrait;
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
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\VatRateModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\VatRateModel';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Starweb\Api\Generated\Model\VatRateModel();
        if (\array_key_exists('defaultVatRate', $data) && \is_int($data['defaultVatRate'])) {
            $data['defaultVatRate'] = (double) $data['defaultVatRate'];
        }
        if (\array_key_exists('fixedOrderPaymentVatRate', $data) && \is_int($data['fixedOrderPaymentVatRate'])) {
            $data['fixedOrderPaymentVatRate'] = (double) $data['fixedOrderPaymentVatRate'];
        }
        if (\array_key_exists('fixedOrderShippingVatRate', $data) && \is_int($data['fixedOrderShippingVatRate'])) {
            $data['fixedOrderShippingVatRate'] = (double) $data['fixedOrderShippingVatRate'];
        }
        if (\array_key_exists('fixedOrderDiscountVatRate', $data) && \is_int($data['fixedOrderDiscountVatRate'])) {
            $data['fixedOrderDiscountVatRate'] = (double) $data['fixedOrderDiscountVatRate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryCode', $data) && $data['countryCode'] !== null) {
            $object->setCountryCode($data['countryCode']);
            unset($data['countryCode']);
        }
        elseif (\array_key_exists('countryCode', $data) && $data['countryCode'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('defaultVatRate', $data) && $data['defaultVatRate'] !== null) {
            $object->setDefaultVatRate($data['defaultVatRate']);
            unset($data['defaultVatRate']);
        }
        elseif (\array_key_exists('defaultVatRate', $data) && $data['defaultVatRate'] === null) {
            $object->setDefaultVatRate(null);
        }
        if (\array_key_exists('fixedOrderPaymentVatRate', $data) && $data['fixedOrderPaymentVatRate'] !== null) {
            $object->setFixedOrderPaymentVatRate($data['fixedOrderPaymentVatRate']);
            unset($data['fixedOrderPaymentVatRate']);
        }
        elseif (\array_key_exists('fixedOrderPaymentVatRate', $data) && $data['fixedOrderPaymentVatRate'] === null) {
            $object->setFixedOrderPaymentVatRate(null);
        }
        if (\array_key_exists('fixedOrderShippingVatRate', $data) && $data['fixedOrderShippingVatRate'] !== null) {
            $object->setFixedOrderShippingVatRate($data['fixedOrderShippingVatRate']);
            unset($data['fixedOrderShippingVatRate']);
        }
        elseif (\array_key_exists('fixedOrderShippingVatRate', $data) && $data['fixedOrderShippingVatRate'] === null) {
            $object->setFixedOrderShippingVatRate(null);
        }
        if (\array_key_exists('fixedOrderDiscountVatRate', $data) && $data['fixedOrderDiscountVatRate'] !== null) {
            $object->setFixedOrderDiscountVatRate($data['fixedOrderDiscountVatRate']);
            unset($data['fixedOrderDiscountVatRate']);
        }
        elseif (\array_key_exists('fixedOrderDiscountVatRate', $data) && $data['fixedOrderDiscountVatRate'] === null) {
            $object->setFixedOrderDiscountVatRate(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
            $data['countryCode'] = $object->getCountryCode();
        }
        if ($object->isInitialized('defaultVatRate') && null !== $object->getDefaultVatRate()) {
            $data['defaultVatRate'] = $object->getDefaultVatRate();
        }
        if ($object->isInitialized('fixedOrderPaymentVatRate') && null !== $object->getFixedOrderPaymentVatRate()) {
            $data['fixedOrderPaymentVatRate'] = $object->getFixedOrderPaymentVatRate();
        }
        if ($object->isInitialized('fixedOrderShippingVatRate') && null !== $object->getFixedOrderShippingVatRate()) {
            $data['fixedOrderShippingVatRate'] = $object->getFixedOrderShippingVatRate();
        }
        if ($object->isInitialized('fixedOrderDiscountVatRate') && null !== $object->getFixedOrderDiscountVatRate()) {
            $data['fixedOrderDiscountVatRate'] = $object->getFixedOrderDiscountVatRate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\VatRateModel' => false);
    }
}
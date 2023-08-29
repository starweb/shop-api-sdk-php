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
class PaymentMethodModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\PaymentMethodModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\PaymentMethodModel';
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
        $object = new \Starweb\Api\Generated\Model\PaymentMethodModel();
        if (\array_key_exists('fee', $data) && \is_int($data['fee'])) {
            $data['fee'] = (double) $data['fee'];
        }
        if (\array_key_exists('validForMinItemsSubtotal', $data) && \is_int($data['validForMinItemsSubtotal'])) {
            $data['validForMinItemsSubtotal'] = (double) $data['validForMinItemsSubtotal'];
        }
        if (\array_key_exists('validForMaxItemsSubtotal', $data) && \is_int($data['validForMaxItemsSubtotal'])) {
            $data['validForMaxItemsSubtotal'] = (double) $data['validForMaxItemsSubtotal'];
        }
        if (\array_key_exists('validForMinWeight', $data) && \is_int($data['validForMinWeight'])) {
            $data['validForMinWeight'] = (double) $data['validForMinWeight'];
        }
        if (\array_key_exists('validForMaxWeight', $data) && \is_int($data['validForMaxWeight'])) {
            $data['validForMaxWeight'] = (double) $data['validForMaxWeight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] !== null) {
            $object->setPaymentMethodId($data['paymentMethodId']);
            unset($data['paymentMethodId']);
        }
        elseif (\array_key_exists('paymentMethodId', $data) && $data['paymentMethodId'] === null) {
            $object->setPaymentMethodId(null);
        }
        if (\array_key_exists('idCode', $data) && $data['idCode'] !== null) {
            $object->setIdCode($data['idCode']);
            unset($data['idCode']);
        }
        elseif (\array_key_exists('idCode', $data) && $data['idCode'] === null) {
            $object->setIdCode(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('fee', $data) && $data['fee'] !== null) {
            $object->setFee($data['fee']);
            unset($data['fee']);
        }
        elseif (\array_key_exists('fee', $data) && $data['fee'] === null) {
            $object->setFee(null);
        }
        if (\array_key_exists('validForCountries', $data) && $data['validForCountries'] !== null) {
            $object->setValidForCountries($data['validForCountries']);
            unset($data['validForCountries']);
        }
        elseif (\array_key_exists('validForCountries', $data) && $data['validForCountries'] === null) {
            $object->setValidForCountries(null);
        }
        if (\array_key_exists('validCountriesSelected', $data) && $data['validCountriesSelected'] !== null) {
            $values = array();
            foreach ($data['validCountriesSelected'] as $value) {
                $values[] = $value;
            }
            $object->setValidCountriesSelected($values);
            unset($data['validCountriesSelected']);
        }
        elseif (\array_key_exists('validCountriesSelected', $data) && $data['validCountriesSelected'] === null) {
            $object->setValidCountriesSelected(null);
        }
        if (\array_key_exists('validForMinItemsSubtotal', $data) && $data['validForMinItemsSubtotal'] !== null) {
            $object->setValidForMinItemsSubtotal($data['validForMinItemsSubtotal']);
            unset($data['validForMinItemsSubtotal']);
        }
        elseif (\array_key_exists('validForMinItemsSubtotal', $data) && $data['validForMinItemsSubtotal'] === null) {
            $object->setValidForMinItemsSubtotal(null);
        }
        if (\array_key_exists('validForMaxItemsSubtotal', $data) && $data['validForMaxItemsSubtotal'] !== null) {
            $object->setValidForMaxItemsSubtotal($data['validForMaxItemsSubtotal']);
            unset($data['validForMaxItemsSubtotal']);
        }
        elseif (\array_key_exists('validForMaxItemsSubtotal', $data) && $data['validForMaxItemsSubtotal'] === null) {
            $object->setValidForMaxItemsSubtotal(null);
        }
        if (\array_key_exists('validForMinWeight', $data) && $data['validForMinWeight'] !== null) {
            $object->setValidForMinWeight($data['validForMinWeight']);
            unset($data['validForMinWeight']);
        }
        elseif (\array_key_exists('validForMinWeight', $data) && $data['validForMinWeight'] === null) {
            $object->setValidForMinWeight(null);
        }
        if (\array_key_exists('validForMaxWeight', $data) && $data['validForMaxWeight'] !== null) {
            $object->setValidForMaxWeight($data['validForMaxWeight']);
            unset($data['validForMaxWeight']);
        }
        elseif (\array_key_exists('validForMaxWeight', $data) && $data['validForMaxWeight'] === null) {
            $object->setValidForMaxWeight(null);
        }
        if (\array_key_exists('validForShippingMethods', $data) && $data['validForShippingMethods'] !== null) {
            $object->setValidForShippingMethods($data['validForShippingMethods']);
            unset($data['validForShippingMethods']);
        }
        elseif (\array_key_exists('validForShippingMethods', $data) && $data['validForShippingMethods'] === null) {
            $object->setValidForShippingMethods(null);
        }
        if (\array_key_exists('validForCustomerType', $data) && $data['validForCustomerType'] !== null) {
            $object->setValidForCustomerType($data['validForCustomerType']);
            unset($data['validForCustomerType']);
        }
        elseif (\array_key_exists('validForCustomerType', $data) && $data['validForCustomerType'] === null) {
            $object->setValidForCustomerType(null);
        }
        if (\array_key_exists('isClickAndCollect', $data) && $data['isClickAndCollect'] !== null) {
            $object->setIsClickAndCollect($data['isClickAndCollect']);
            unset($data['isClickAndCollect']);
        }
        elseif (\array_key_exists('isClickAndCollect', $data) && $data['isClickAndCollect'] === null) {
            $object->setIsClickAndCollect(null);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('languages', $data) && $data['languages'] !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], 'Starweb\\Api\\Generated\\Model\\PaymentMethodLanguageModelCollection', 'json', $context));
            unset($data['languages']);
        }
        elseif (\array_key_exists('languages', $data) && $data['languages'] === null) {
            $object->setLanguages(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('languages') && null !== $object->getLanguages()) {
            $data['languages'] = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
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
        return array('Starweb\\Api\\Generated\\Model\\PaymentMethodModel' => false);
    }
}
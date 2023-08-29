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
class ShippingMethodModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ShippingMethodModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ShippingMethodModel';
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
        $object = new \Starweb\Api\Generated\Model\ShippingMethodModel();
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
        if (\array_key_exists('freeShippingMinItemsSubtotal', $data) && \is_int($data['freeShippingMinItemsSubtotal'])) {
            $data['freeShippingMinItemsSubtotal'] = (double) $data['freeShippingMinItemsSubtotal'];
        }
        if (\array_key_exists('freeShippingMinWeight', $data) && \is_int($data['freeShippingMinWeight'])) {
            $data['freeShippingMinWeight'] = (double) $data['freeShippingMinWeight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('shippingMethodId', $data) && $data['shippingMethodId'] !== null) {
            $object->setShippingMethodId($data['shippingMethodId']);
            unset($data['shippingMethodId']);
        }
        elseif (\array_key_exists('shippingMethodId', $data) && $data['shippingMethodId'] === null) {
            $object->setShippingMethodId(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
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
        if (\array_key_exists('validForCustomerType', $data) && $data['validForCustomerType'] !== null) {
            $object->setValidForCustomerType($data['validForCustomerType']);
            unset($data['validForCustomerType']);
        }
        elseif (\array_key_exists('validForCustomerType', $data) && $data['validForCustomerType'] === null) {
            $object->setValidForCustomerType(null);
        }
        if (\array_key_exists('freeShippingMinItemsSubtotal', $data) && $data['freeShippingMinItemsSubtotal'] !== null) {
            $object->setFreeShippingMinItemsSubtotal($data['freeShippingMinItemsSubtotal']);
            unset($data['freeShippingMinItemsSubtotal']);
        }
        elseif (\array_key_exists('freeShippingMinItemsSubtotal', $data) && $data['freeShippingMinItemsSubtotal'] === null) {
            $object->setFreeShippingMinItemsSubtotal(null);
        }
        if (\array_key_exists('freeShippingMinWeight', $data) && $data['freeShippingMinWeight'] !== null) {
            $object->setFreeShippingMinWeight($data['freeShippingMinWeight']);
            unset($data['freeShippingMinWeight']);
        }
        elseif (\array_key_exists('freeShippingMinWeight', $data) && $data['freeShippingMinWeight'] === null) {
            $object->setFreeShippingMinWeight(null);
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
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], 'Starweb\\Api\\Generated\\Model\\ShippingMethodLanguageModelCollection', 'json', $context));
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
        return array('Starweb\\Api\\Generated\\Model\\ShippingMethodModel' => false);
    }
}
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
class PaymentMethodModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\PaymentMethodModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\PaymentMethodModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\PaymentMethodModel();
        if (property_exists($data, 'paymentMethodId') && $data->{'paymentMethodId'} !== null) {
            $object->setPaymentMethodId($data->{'paymentMethodId'});
        }
        elseif (property_exists($data, 'paymentMethodId') && $data->{'paymentMethodId'} === null) {
            $object->setPaymentMethodId(null);
        }
        if (property_exists($data, 'idCode') && $data->{'idCode'} !== null) {
            $object->setIdCode($data->{'idCode'});
        }
        elseif (property_exists($data, 'idCode') && $data->{'idCode'} === null) {
            $object->setIdCode(null);
        }
        if (property_exists($data, 'active') && $data->{'active'} !== null) {
            $object->setActive($data->{'active'});
        }
        elseif (property_exists($data, 'active') && $data->{'active'} === null) {
            $object->setActive(null);
        }
        if (property_exists($data, 'fee') && $data->{'fee'} !== null) {
            $object->setFee($data->{'fee'});
        }
        elseif (property_exists($data, 'fee') && $data->{'fee'} === null) {
            $object->setFee(null);
        }
        if (property_exists($data, 'validForCountries') && $data->{'validForCountries'} !== null) {
            $object->setValidForCountries($data->{'validForCountries'});
        }
        elseif (property_exists($data, 'validForCountries') && $data->{'validForCountries'} === null) {
            $object->setValidForCountries(null);
        }
        if (property_exists($data, 'validCountriesSelected') && $data->{'validCountriesSelected'} !== null) {
            $values = array();
            foreach ($data->{'validCountriesSelected'} as $value) {
                $values[] = $value;
            }
            $object->setValidCountriesSelected($values);
        }
        elseif (property_exists($data, 'validCountriesSelected') && $data->{'validCountriesSelected'} === null) {
            $object->setValidCountriesSelected(null);
        }
        if (property_exists($data, 'validForMinItemsSubtotal') && $data->{'validForMinItemsSubtotal'} !== null) {
            $object->setValidForMinItemsSubtotal($data->{'validForMinItemsSubtotal'});
        }
        elseif (property_exists($data, 'validForMinItemsSubtotal') && $data->{'validForMinItemsSubtotal'} === null) {
            $object->setValidForMinItemsSubtotal(null);
        }
        if (property_exists($data, 'validForMaxItemsSubtotal') && $data->{'validForMaxItemsSubtotal'} !== null) {
            $object->setValidForMaxItemsSubtotal($data->{'validForMaxItemsSubtotal'});
        }
        elseif (property_exists($data, 'validForMaxItemsSubtotal') && $data->{'validForMaxItemsSubtotal'} === null) {
            $object->setValidForMaxItemsSubtotal(null);
        }
        if (property_exists($data, 'validForMinWeight') && $data->{'validForMinWeight'} !== null) {
            $object->setValidForMinWeight($data->{'validForMinWeight'});
        }
        elseif (property_exists($data, 'validForMinWeight') && $data->{'validForMinWeight'} === null) {
            $object->setValidForMinWeight(null);
        }
        if (property_exists($data, 'validForMaxWeight') && $data->{'validForMaxWeight'} !== null) {
            $object->setValidForMaxWeight($data->{'validForMaxWeight'});
        }
        elseif (property_exists($data, 'validForMaxWeight') && $data->{'validForMaxWeight'} === null) {
            $object->setValidForMaxWeight(null);
        }
        if (property_exists($data, 'validForShippingMethods') && $data->{'validForShippingMethods'} !== null) {
            $object->setValidForShippingMethods($data->{'validForShippingMethods'});
        }
        elseif (property_exists($data, 'validForShippingMethods') && $data->{'validForShippingMethods'} === null) {
            $object->setValidForShippingMethods(null);
        }
        if (property_exists($data, 'validForCustomerType') && $data->{'validForCustomerType'} !== null) {
            $object->setValidForCustomerType($data->{'validForCustomerType'});
        }
        elseif (property_exists($data, 'validForCustomerType') && $data->{'validForCustomerType'} === null) {
            $object->setValidForCustomerType(null);
        }
        if (property_exists($data, 'isClickAndCollect') && $data->{'isClickAndCollect'} !== null) {
            $object->setIsClickAndCollect($data->{'isClickAndCollect'});
        }
        elseif (property_exists($data, 'isClickAndCollect') && $data->{'isClickAndCollect'} === null) {
            $object->setIsClickAndCollect(null);
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\PaymentMethodLanguageModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'languages') && $data->{'languages'} === null) {
            $object->setLanguages(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        else {
            $data->{'languages'} = null;
        }
        return $data;
    }
}
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
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Starweb\Api\Generated\Model\PaymentMethodModel();
        if (property_exists($data, 'paymentMethodId')) {
            $object->setPaymentMethodId($data->{'paymentMethodId'});
        }
        if (property_exists($data, 'idCode')) {
            $object->setIdCode($data->{'idCode'});
        }
        if (property_exists($data, 'active')) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'fee')) {
            $object->setFee($data->{'fee'});
        }
        if (property_exists($data, 'validForCountries')) {
            $object->setValidForCountries($data->{'validForCountries'});
        }
        if (property_exists($data, 'validCountriesSelected')) {
            $values = array();
            foreach ($data->{'validCountriesSelected'} as $value) {
                $values[] = $value;
            }
            $object->setValidCountriesSelected($values);
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
        if (property_exists($data, 'validForShippingMethods')) {
            $object->setValidForShippingMethods($data->{'validForShippingMethods'});
        }
        if (property_exists($data, 'validForCustomerType') && $data->{'validForCustomerType'} !== null) {
            $object->setValidForCustomerType($data->{'validForCustomerType'});
        }
        elseif (property_exists($data, 'validForCustomerType') && $data->{'validForCustomerType'} === null) {
            $object->setValidForCustomerType(null);
        }
        if (property_exists($data, 'isClickAndCollect')) {
            $object->setIsClickAndCollect($data->{'isClickAndCollect'});
        }
        if (property_exists($data, 'languages')) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\PaymentMethodLanguageModelCollection', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        return $data;
    }
}
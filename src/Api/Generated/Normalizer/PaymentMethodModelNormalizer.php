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
            throw new InvalidArgumentException();
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
        if (property_exists($data, 'validForMinItemsSubtotal')) {
            $object->setValidForMinItemsSubtotal($data->{'validForMinItemsSubtotal'});
        }
        if (property_exists($data, 'validForMaxItemsSubtotal')) {
            $object->setValidForMaxItemsSubtotal($data->{'validForMaxItemsSubtotal'});
        }
        if (property_exists($data, 'validForMinWeight')) {
            $object->setValidForMinWeight($data->{'validForMinWeight'});
        }
        if (property_exists($data, 'validForMaxWeight')) {
            $object->setValidForMaxWeight($data->{'validForMaxWeight'});
        }
        if (property_exists($data, 'validForShippingMethods')) {
            $object->setValidForShippingMethods($data->{'validForShippingMethods'});
        }
        if (property_exists($data, 'validForCustomerType')) {
            $object->setValidForCustomerType($data->{'validForCustomerType'});
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
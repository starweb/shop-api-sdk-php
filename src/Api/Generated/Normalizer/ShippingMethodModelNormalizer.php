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
class ShippingMethodModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ShippingMethodModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ShippingMethodModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ShippingMethodModel();
        if (property_exists($data, 'shippingMethodId') && $data->{'shippingMethodId'} !== null) {
            $object->setShippingMethodId($data->{'shippingMethodId'});
        }
        if (property_exists($data, 'active') && $data->{'active'} !== null) {
            $object->setActive($data->{'active'});
        }
        if (property_exists($data, 'validForCountries') && $data->{'validForCountries'} !== null) {
            $object->setValidForCountries($data->{'validForCountries'});
        }
        if (property_exists($data, 'validCountriesSelected') && $data->{'validCountriesSelected'} !== null) {
            $values = array();
            foreach ($data->{'validCountriesSelected'} as $value) {
                $values[] = $value;
            }
            $object->setValidCountriesSelected($values);
        }
        if (property_exists($data, 'validForMinItemsSubtotal') && $data->{'validForMinItemsSubtotal'} !== null) {
            $object->setValidForMinItemsSubtotal($data->{'validForMinItemsSubtotal'});
        }
        if (property_exists($data, 'validForMaxItemsSubtotal') && $data->{'validForMaxItemsSubtotal'} !== null) {
            $object->setValidForMaxItemsSubtotal($data->{'validForMaxItemsSubtotal'});
        }
        if (property_exists($data, 'validForMinWeight') && $data->{'validForMinWeight'} !== null) {
            $object->setValidForMinWeight($data->{'validForMinWeight'});
        }
        if (property_exists($data, 'validForMaxWeight') && $data->{'validForMaxWeight'} !== null) {
            $object->setValidForMaxWeight($data->{'validForMaxWeight'});
        }
        if (property_exists($data, 'validForCustomerType') && $data->{'validForCustomerType'} !== null) {
            $object->setValidForCustomerType($data->{'validForCustomerType'});
        }
        if (property_exists($data, 'freeShippingMinItemsSubtotal') && $data->{'freeShippingMinItemsSubtotal'} !== null) {
            $object->setFreeShippingMinItemsSubtotal($data->{'freeShippingMinItemsSubtotal'});
        }
        if (property_exists($data, 'freeShippingMinWeight') && $data->{'freeShippingMinWeight'} !== null) {
            $object->setFreeShippingMinWeight($data->{'freeShippingMinWeight'});
        }
        if (property_exists($data, 'isClickAndCollect') && $data->{'isClickAndCollect'} !== null) {
            $object->setIsClickAndCollect($data->{'isClickAndCollect'});
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ShippingMethodLanguageModelCollection', 'json', $context));
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
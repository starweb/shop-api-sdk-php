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
class ProductVatRateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductVatRateModel();
        if (property_exists($data, 'countryCode') && $data->{'countryCode'} !== null) {
            $object->setCountryCode($data->{'countryCode'});
        }
        elseif (property_exists($data, 'countryCode') && $data->{'countryCode'} === null) {
            $object->setCountryCode(null);
        }
        if (property_exists($data, 'vatRate') && $data->{'vatRate'} !== null) {
            $object->setVatRate($data->{'vatRate'});
        }
        elseif (property_exists($data, 'vatRate') && $data->{'vatRate'} === null) {
            $object->setVatRate(null);
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
        if (null !== $object->getVatRate()) {
            $data->{'vatRate'} = $object->getVatRate();
        }
        else {
            $data->{'vatRate'} = null;
        }
        return $data;
    }
}
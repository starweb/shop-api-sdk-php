<?php

namespace Starweb\Api\Client\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductVariantPriceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Client\\Model\\ProductVariantPriceModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Client\Model\ProductVariantPriceModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Client\Model\ProductVariantPriceModel();
        if (property_exists($data, 'pricelistId')) {
            $object->setPricelistId($data->{'pricelistId'});
        }
        if (property_exists($data, 'priceExVat')) {
            $object->setPriceExVat($data->{'priceExVat'});
        }
        if (property_exists($data, 'specialPriceExVat')) {
            $object->setSpecialPriceExVat($data->{'specialPriceExVat'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPricelistId()) {
            $data->{'pricelistId'} = $object->getPricelistId();
        }
        if (null !== $object->getPriceExVat()) {
            $data->{'priceExVat'} = $object->getPriceExVat();
        }
        if (null !== $object->getSpecialPriceExVat()) {
            $data->{'specialPriceExVat'} = $object->getSpecialPriceExVat();
        }
        return $data;
    }
}
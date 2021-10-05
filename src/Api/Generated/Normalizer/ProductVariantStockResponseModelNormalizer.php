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
class ProductVariantStockResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantStockResponseModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantStockResponseModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductVariantStockResponseModel();
        if (property_exists($data, 'stockLocationId') && $data->{'stockLocationId'} !== null) {
            $object->setStockLocationId($data->{'stockLocationId'});
        }
        elseif (property_exists($data, 'stockLocationId') && $data->{'stockLocationId'} === null) {
            $object->setStockLocationId(null);
        }
        if (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} !== null) {
            $object->setStockStatusId($data->{'stockStatusId'});
        }
        elseif (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} === null) {
            $object->setStockStatusId(null);
        }
        if (property_exists($data, 'stockQuantity') && $data->{'stockQuantity'} !== null) {
            $object->setStockQuantity($data->{'stockQuantity'});
        }
        elseif (property_exists($data, 'stockQuantity') && $data->{'stockQuantity'} === null) {
            $object->setStockQuantity(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStockStatusId()) {
            $data->{'stockStatusId'} = $object->getStockStatusId();
        }
        else {
            $data->{'stockStatusId'} = null;
        }
        if (null !== $object->getStockQuantity()) {
            $data->{'stockQuantity'} = $object->getStockQuantity();
        }
        else {
            $data->{'stockQuantity'} = null;
        }
        return $data;
    }
}
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
class StockLocationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\StockLocationModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\StockLocationModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\StockLocationModel();
        if (property_exists($data, 'stockLocationId') && $data->{'stockLocationId'} !== null) {
            $object->setStockLocationId($data->{'stockLocationId'});
        }
        elseif (property_exists($data, 'stockLocationId') && $data->{'stockLocationId'} === null) {
            $object->setStockLocationId(null);
        }
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        elseif (property_exists($data, 'externalId') && $data->{'externalId'} === null) {
            $object->setExternalId(null);
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        elseif (property_exists($data, 'externalIdType') && $data->{'externalIdType'} === null) {
            $object->setExternalIdType(null);
        }
        if (property_exists($data, 'visibility') && $data->{'visibility'} !== null) {
            $object->setVisibility($data->{'visibility'});
        }
        elseif (property_exists($data, 'visibility') && $data->{'visibility'} === null) {
            $object->setVisibility(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'ecommerceStockLocation') && $data->{'ecommerceStockLocation'} !== null) {
            $object->setEcommerceStockLocation($data->{'ecommerceStockLocation'});
        }
        elseif (property_exists($data, 'ecommerceStockLocation') && $data->{'ecommerceStockLocation'} === null) {
            $object->setEcommerceStockLocation(null);
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\StockLocationLanguagesModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'languages') && $data->{'languages'} === null) {
            $object->setLanguages(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getExternalId()) {
            $data->{'externalId'} = $object->getExternalId();
        }
        else {
            $data->{'externalId'} = null;
        }
        if (null !== $object->getExternalIdType()) {
            $data->{'externalIdType'} = $object->getExternalIdType();
        }
        else {
            $data->{'externalIdType'} = null;
        }
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        else {
            $data->{'visibility'} = null;
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        if (null !== $object->getEcommerceStockLocation()) {
            $data->{'ecommerceStockLocation'} = $object->getEcommerceStockLocation();
        }
        else {
            $data->{'ecommerceStockLocation'} = null;
        }
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        else {
            $data->{'languages'} = null;
        }
        return $data;
    }
}
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
class ProductStockStatusResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductStockStatusResponseModel();
        if (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} !== null) {
            $object->setStockStatusId($data->{'stockStatusId'});
        }
        elseif (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} === null) {
            $object->setStockStatusId(null);
        }
        if (property_exists($data, 'idCode') && $data->{'idCode'} !== null) {
            $object->setIdCode($data->{'idCode'});
        }
        elseif (property_exists($data, 'idCode') && $data->{'idCode'} === null) {
            $object->setIdCode(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'stockoutNewStatusId') && $data->{'stockoutNewStatusId'} !== null) {
            $object->setStockoutNewStatusId($data->{'stockoutNewStatusId'});
        }
        elseif (property_exists($data, 'stockoutNewStatusId') && $data->{'stockoutNewStatusId'} === null) {
            $object->setStockoutNewStatusId(null);
        }
        if (property_exists($data, 'productBuyable') && $data->{'productBuyable'} !== null) {
            $object->setProductBuyable($data->{'productBuyable'});
        }
        elseif (property_exists($data, 'productBuyable') && $data->{'productBuyable'} === null) {
            $object->setProductBuyable(null);
        }
        if (property_exists($data, 'inStock') && $data->{'inStock'} !== null) {
            $object->setInStock($data->{'inStock'});
        }
        elseif (property_exists($data, 'inStock') && $data->{'inStock'} === null) {
            $object->setInStock(null);
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModelLanguages', 'json', $context));
        }
        elseif (property_exists($data, 'languages') && $data->{'languages'} === null) {
            $object->setLanguages(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        if (null !== $object->getStockoutNewStatusId()) {
            $data->{'stockoutNewStatusId'} = $object->getStockoutNewStatusId();
        }
        else {
            $data->{'stockoutNewStatusId'} = null;
        }
        if (null !== $object->getProductBuyable()) {
            $data->{'productBuyable'} = $object->getProductBuyable();
        }
        else {
            $data->{'productBuyable'} = null;
        }
        if (null !== $object->getInStock()) {
            $data->{'inStock'} = $object->getInStock();
        }
        else {
            $data->{'inStock'} = null;
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
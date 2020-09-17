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
class ProductStockStatusRequestModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusRequestModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusRequestModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductStockStatusRequestModel();
        if (property_exists($data, 'stockStatusId') && $data->{'stockStatusId'} !== null) {
            $object->setStockStatusId($data->{'stockStatusId'});
        }
        if (property_exists($data, 'idCode') && $data->{'idCode'} !== null) {
            $object->setIdCode($data->{'idCode'});
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'stockoutNewStatusId') && $data->{'stockoutNewStatusId'} !== null) {
            $object->setStockoutNewStatusId($data->{'stockoutNewStatusId'});
        }
        if (property_exists($data, 'productBuyable') && $data->{'productBuyable'} !== null) {
            $object->setProductBuyable($data->{'productBuyable'});
        }
        if (property_exists($data, 'inStock') && $data->{'inStock'} !== null) {
            $object->setInStock($data->{'inStock'});
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $values = array();
            foreach ($data->{'languages'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\ProductStockStatusLanguageModel', 'json', $context);
            }
            $object->setLanguages($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        $data->{'stockoutNewStatusId'} = $object->getStockoutNewStatusId();
        if (null !== $object->getProductBuyable()) {
            $data->{'productBuyable'} = $object->getProductBuyable();
        }
        if (null !== $object->getInStock()) {
            $data->{'inStock'} = $object->getInStock();
        }
        if (null !== $object->getLanguages()) {
            $values = array();
            foreach ($object->getLanguages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'languages'} = $values;
        }
        return $data;
    }
}
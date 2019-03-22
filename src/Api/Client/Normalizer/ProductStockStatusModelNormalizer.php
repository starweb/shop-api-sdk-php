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
class ProductStockStatusModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Client\\Model\\ProductStockStatusModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Client\Model\ProductStockStatusModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Client\Model\ProductStockStatusModel();
        if (property_exists($data, 'stockStatusId')) {
            $object->setStockStatusId($data->{'stockStatusId'});
        }
        if (property_exists($data, 'idCode')) {
            $object->setIdCode($data->{'idCode'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'stockoutNewStatusId')) {
            $object->setStockoutNewStatusId($data->{'stockoutNewStatusId'});
        }
        if (property_exists($data, 'productBuyable')) {
            $object->setProductBuyable($data->{'productBuyable'});
        }
        if (property_exists($data, 'inStock')) {
            $object->setInStock($data->{'inStock'});
        }
        if (property_exists($data, 'languages')) {
            $values = array();
            foreach ($data->{'languages'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Client\\Model\\ProductStockStatusLanguageModel', 'json', $context);
            }
            $object->setLanguages($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStockStatusId()) {
            $data->{'stockStatusId'} = $object->getStockStatusId();
        }
        if (null !== $object->getIdCode()) {
            $data->{'idCode'} = $object->getIdCode();
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        if (null !== $object->getStockoutNewStatusId()) {
            $data->{'stockoutNewStatusId'} = $object->getStockoutNewStatusId();
        }
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
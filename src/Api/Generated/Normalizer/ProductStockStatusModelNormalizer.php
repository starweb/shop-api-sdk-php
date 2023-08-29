<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Starweb\Api\Generated\Runtime\Normalizer\CheckArray;
use Starweb\Api\Generated\Runtime\Normalizer\ValidatorTrait;
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
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusModel';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Starweb\Api\Generated\Model\ProductStockStatusModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stockStatusId', $data)) {
            $object->setStockStatusId($data['stockStatusId']);
            unset($data['stockStatusId']);
        }
        if (\array_key_exists('idCode', $data)) {
            $object->setIdCode($data['idCode']);
            unset($data['idCode']);
        }
        if (\array_key_exists('sortIndex', $data)) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        if (\array_key_exists('stockoutNewStatusId', $data) && $data['stockoutNewStatusId'] !== null) {
            $object->setStockoutNewStatusId($data['stockoutNewStatusId']);
            unset($data['stockoutNewStatusId']);
        }
        elseif (\array_key_exists('stockoutNewStatusId', $data) && $data['stockoutNewStatusId'] === null) {
            $object->setStockoutNewStatusId(null);
        }
        if (\array_key_exists('productBuyable', $data)) {
            $object->setProductBuyable($data['productBuyable']);
            unset($data['productBuyable']);
        }
        if (\array_key_exists('inStock', $data)) {
            $object->setInStock($data['inStock']);
            unset($data['inStock']);
        }
        if (\array_key_exists('languages', $data)) {
            $values = array();
            foreach ($data['languages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\ProductStockStatusLanguageModel', 'json', $context);
            }
            $object->setLanguages($values);
            unset($data['languages']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('sortIndex') && null !== $object->getSortIndex()) {
            $data['sortIndex'] = $object->getSortIndex();
        }
        if ($object->isInitialized('stockoutNewStatusId') && null !== $object->getStockoutNewStatusId()) {
            $data['stockoutNewStatusId'] = $object->getStockoutNewStatusId();
        }
        if ($object->isInitialized('productBuyable') && null !== $object->getProductBuyable()) {
            $data['productBuyable'] = $object->getProductBuyable();
        }
        if ($object->isInitialized('inStock') && null !== $object->getInStock()) {
            $data['inStock'] = $object->getInStock();
        }
        if ($object->isInitialized('languages') && null !== $object->getLanguages()) {
            $values = array();
            foreach ($object->getLanguages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['languages'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductStockStatusModel' => false);
    }
}
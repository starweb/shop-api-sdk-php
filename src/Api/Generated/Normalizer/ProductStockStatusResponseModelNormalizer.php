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
class ProductStockStatusResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductStockStatusResponseModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stockStatusId', $data) && $data['stockStatusId'] !== null) {
            $object->setStockStatusId($data['stockStatusId']);
            unset($data['stockStatusId']);
        }
        elseif (\array_key_exists('stockStatusId', $data) && $data['stockStatusId'] === null) {
            $object->setStockStatusId(null);
        }
        if (\array_key_exists('idCode', $data) && $data['idCode'] !== null) {
            $object->setIdCode($data['idCode']);
            unset($data['idCode']);
        }
        elseif (\array_key_exists('idCode', $data) && $data['idCode'] === null) {
            $object->setIdCode(null);
        }
        if (\array_key_exists('sortIndex', $data) && $data['sortIndex'] !== null) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        elseif (\array_key_exists('sortIndex', $data) && $data['sortIndex'] === null) {
            $object->setSortIndex(null);
        }
        if (\array_key_exists('stockoutNewStatusId', $data) && $data['stockoutNewStatusId'] !== null) {
            $object->setStockoutNewStatusId($data['stockoutNewStatusId']);
            unset($data['stockoutNewStatusId']);
        }
        elseif (\array_key_exists('stockoutNewStatusId', $data) && $data['stockoutNewStatusId'] === null) {
            $object->setStockoutNewStatusId(null);
        }
        if (\array_key_exists('productBuyable', $data) && $data['productBuyable'] !== null) {
            $object->setProductBuyable($data['productBuyable']);
            unset($data['productBuyable']);
        }
        elseif (\array_key_exists('productBuyable', $data) && $data['productBuyable'] === null) {
            $object->setProductBuyable(null);
        }
        if (\array_key_exists('inStock', $data) && $data['inStock'] !== null) {
            $object->setInStock($data['inStock']);
            unset($data['inStock']);
        }
        elseif (\array_key_exists('inStock', $data) && $data['inStock'] === null) {
            $object->setInStock(null);
        }
        if (\array_key_exists('languages', $data) && $data['languages'] !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], 'Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModelLanguages', 'json', $context));
            unset($data['languages']);
        }
        elseif (\array_key_exists('languages', $data) && $data['languages'] === null) {
            $object->setLanguages(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
            $data['languages'] = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductStockStatusResponseModel' => false);
    }
}
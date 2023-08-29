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
class StockLocationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\StockLocationModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\StockLocationModel';
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
        $object = new \Starweb\Api\Generated\Model\StockLocationModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stockLocationId', $data) && $data['stockLocationId'] !== null) {
            $object->setStockLocationId($data['stockLocationId']);
            unset($data['stockLocationId']);
        }
        elseif (\array_key_exists('stockLocationId', $data) && $data['stockLocationId'] === null) {
            $object->setStockLocationId(null);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('externalIdType', $data) && $data['externalIdType'] !== null) {
            $object->setExternalIdType($data['externalIdType']);
            unset($data['externalIdType']);
        }
        elseif (\array_key_exists('externalIdType', $data) && $data['externalIdType'] === null) {
            $object->setExternalIdType(null);
        }
        if (\array_key_exists('visibility', $data) && $data['visibility'] !== null) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        elseif (\array_key_exists('visibility', $data) && $data['visibility'] === null) {
            $object->setVisibility(null);
        }
        if (\array_key_exists('sortIndex', $data) && $data['sortIndex'] !== null) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        elseif (\array_key_exists('sortIndex', $data) && $data['sortIndex'] === null) {
            $object->setSortIndex(null);
        }
        if (\array_key_exists('ecommerceStockLocation', $data) && $data['ecommerceStockLocation'] !== null) {
            $object->setEcommerceStockLocation($data['ecommerceStockLocation']);
            unset($data['ecommerceStockLocation']);
        }
        elseif (\array_key_exists('ecommerceStockLocation', $data) && $data['ecommerceStockLocation'] === null) {
            $object->setEcommerceStockLocation(null);
        }
        if (\array_key_exists('languages', $data) && $data['languages'] !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], 'Starweb\\Api\\Generated\\Model\\StockLocationLanguagesModelCollection', 'json', $context));
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
        if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if ($object->isInitialized('externalIdType') && null !== $object->getExternalIdType()) {
            $data['externalIdType'] = $object->getExternalIdType();
        }
        if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        if ($object->isInitialized('sortIndex') && null !== $object->getSortIndex()) {
            $data['sortIndex'] = $object->getSortIndex();
        }
        if ($object->isInitialized('ecommerceStockLocation') && null !== $object->getEcommerceStockLocation()) {
            $data['ecommerceStockLocation'] = $object->getEcommerceStockLocation();
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
        return array('Starweb\\Api\\Generated\\Model\\StockLocationModel' => false);
    }
}
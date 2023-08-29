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
class ProductModelPatchableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductModelPatchable';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductModelPatchable';
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
        $object = new \Starweb\Api\Generated\Model\ProductModelPatchable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productId', $data)) {
            $object->setProductId($data['productId']);
            unset($data['productId']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        if (\array_key_exists('defaultVatRate', $data) && $data['defaultVatRate'] !== null) {
            $object->setDefaultVatRate($data['defaultVatRate']);
            unset($data['defaultVatRate']);
        }
        elseif (\array_key_exists('defaultVatRate', $data) && $data['defaultVatRate'] === null) {
            $object->setDefaultVatRate(null);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        if (\array_key_exists('visibilityPricelistIds', $data)) {
            $values = array();
            foreach ($data['visibilityPricelistIds'] as $value) {
                $values[] = $value;
            }
            $object->setVisibilityPricelistIds($values);
            unset($data['visibilityPricelistIds']);
        }
        if (\array_key_exists('moreInfoUrl', $data)) {
            $object->setMoreInfoUrl($data['moreInfoUrl']);
            unset($data['moreInfoUrl']);
        }
        if (\array_key_exists('manufacturerId', $data) && $data['manufacturerId'] !== null) {
            $object->setManufacturerId($data['manufacturerId']);
            unset($data['manufacturerId']);
        }
        elseif (\array_key_exists('manufacturerId', $data) && $data['manufacturerId'] === null) {
            $object->setManufacturerId(null);
        }
        if (\array_key_exists('unitId', $data) && $data['unitId'] !== null) {
            $object->setUnitId($data['unitId']);
            unset($data['unitId']);
        }
        elseif (\array_key_exists('unitId', $data) && $data['unitId'] === null) {
            $object->setUnitId(null);
        }
        if (\array_key_exists('sortIndex', $data) && $data['sortIndex'] !== null) {
            $object->setSortIndex($data['sortIndex']);
            unset($data['sortIndex']);
        }
        elseif (\array_key_exists('sortIndex', $data) && $data['sortIndex'] === null) {
            $object->setSortIndex(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('isBackInStockWatchable', $data)) {
            $object->setIsBackInStockWatchable($data['isBackInStockWatchable']);
            unset($data['isBackInStockWatchable']);
        }
        if (\array_key_exists('bundleUseManualPrice', $data)) {
            $object->setBundleUseManualPrice($data['bundleUseManualPrice']);
            unset($data['bundleUseManualPrice']);
        }
        if (\array_key_exists('accounting', $data) && $data['accounting'] !== null) {
            $object->setAccounting($data['accounting']);
            unset($data['accounting']);
        }
        elseif (\array_key_exists('accounting', $data) && $data['accounting'] === null) {
            $object->setAccounting(null);
        }
        if (\array_key_exists('hasSeveralVariants', $data)) {
            $object->setHasSeveralVariants($data['hasSeveralVariants']);
            unset($data['hasSeveralVariants']);
        }
        if (\array_key_exists('modifiedAt', $data)) {
            $object->setModifiedAt($data['modifiedAt']);
            unset($data['modifiedAt']);
        }
        if (\array_key_exists('mediaFiles', $data)) {
            $values_1 = array();
            foreach ($data['mediaFiles'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel', 'json', $context);
            }
            $object->setMediaFiles($values_1);
            unset($data['mediaFiles']);
        }
        if (\array_key_exists('languages', $data)) {
            $values_2 = array();
            foreach ($data['languages'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel', 'json', $context);
            }
            $object->setLanguages($values_2);
            unset($data['languages']);
        }
        if (\array_key_exists('vatRates', $data)) {
            $values_3 = array();
            foreach ($data['vatRates'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel', 'json', $context);
            }
            $object->setVatRates($values_3);
            unset($data['vatRates']);
        }
        if (\array_key_exists('categories', $data)) {
            $values_4 = array();
            foreach ($data['categories'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModel', 'json', $context);
            }
            $object->setCategories($values_4);
            unset($data['categories']);
        }
        if (\array_key_exists('metaData', $data)) {
            $values_5 = array();
            foreach ($data['metaData'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelUpdatable', 'json', $context);
            }
            $object->setMetaData($values_5);
            unset($data['metaData']);
        }
        foreach ($data as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_6;
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
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('defaultVatRate') && null !== $object->getDefaultVatRate()) {
            $data['defaultVatRate'] = $object->getDefaultVatRate();
        }
        if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        if ($object->isInitialized('visibilityPricelistIds') && null !== $object->getVisibilityPricelistIds()) {
            $values = array();
            foreach ($object->getVisibilityPricelistIds() as $value) {
                $values[] = $value;
            }
            $data['visibilityPricelistIds'] = $values;
        }
        if ($object->isInitialized('moreInfoUrl') && null !== $object->getMoreInfoUrl()) {
            $data['moreInfoUrl'] = $object->getMoreInfoUrl();
        }
        if ($object->isInitialized('manufacturerId') && null !== $object->getManufacturerId()) {
            $data['manufacturerId'] = $object->getManufacturerId();
        }
        if ($object->isInitialized('unitId') && null !== $object->getUnitId()) {
            $data['unitId'] = $object->getUnitId();
        }
        if ($object->isInitialized('sortIndex') && null !== $object->getSortIndex()) {
            $data['sortIndex'] = $object->getSortIndex();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('isBackInStockWatchable') && null !== $object->getIsBackInStockWatchable()) {
            $data['isBackInStockWatchable'] = $object->getIsBackInStockWatchable();
        }
        if ($object->isInitialized('bundleUseManualPrice') && null !== $object->getBundleUseManualPrice()) {
            $data['bundleUseManualPrice'] = $object->getBundleUseManualPrice();
        }
        if ($object->isInitialized('accounting') && null !== $object->getAccounting()) {
            $data['accounting'] = $object->getAccounting();
        }
        if ($object->isInitialized('mediaFiles') && null !== $object->getMediaFiles()) {
            $values_1 = array();
            foreach ($object->getMediaFiles() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['mediaFiles'] = $values_1;
        }
        if ($object->isInitialized('languages') && null !== $object->getLanguages()) {
            $values_2 = array();
            foreach ($object->getLanguages() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['languages'] = $values_2;
        }
        if ($object->isInitialized('vatRates') && null !== $object->getVatRates()) {
            $values_3 = array();
            foreach ($object->getVatRates() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['vatRates'] = $values_3;
        }
        if ($object->isInitialized('categories') && null !== $object->getCategories()) {
            $values_4 = array();
            foreach ($object->getCategories() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['categories'] = $values_4;
        }
        if ($object->isInitialized('metaData') && null !== $object->getMetaData()) {
            $values_5 = array();
            foreach ($object->getMetaData() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['metaData'] = $values_5;
        }
        foreach ($object as $key => $value_6) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_6;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductModelPatchable' => false);
    }
}
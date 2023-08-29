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
class ProductModelUpdatableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductModelUpdatable';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductModelUpdatable';
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
        $object = new \Starweb\Api\Generated\Model\ProductModelUpdatable();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('createdAt', $data) && $data['createdAt'] !== null) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        elseif (\array_key_exists('createdAt', $data) && $data['createdAt'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('defaultVatRate', $data) && $data['defaultVatRate'] !== null) {
            $object->setDefaultVatRate($data['defaultVatRate']);
            unset($data['defaultVatRate']);
        }
        elseif (\array_key_exists('defaultVatRate', $data) && $data['defaultVatRate'] === null) {
            $object->setDefaultVatRate(null);
        }
        if (\array_key_exists('visibility', $data) && $data['visibility'] !== null) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        elseif (\array_key_exists('visibility', $data) && $data['visibility'] === null) {
            $object->setVisibility(null);
        }
        if (\array_key_exists('visibilityPricelistIds', $data) && $data['visibilityPricelistIds'] !== null) {
            $values = array();
            foreach ($data['visibilityPricelistIds'] as $value) {
                $values[] = $value;
            }
            $object->setVisibilityPricelistIds($values);
            unset($data['visibilityPricelistIds']);
        }
        elseif (\array_key_exists('visibilityPricelistIds', $data) && $data['visibilityPricelistIds'] === null) {
            $object->setVisibilityPricelistIds(null);
        }
        if (\array_key_exists('moreInfoUrl', $data) && $data['moreInfoUrl'] !== null) {
            $object->setMoreInfoUrl($data['moreInfoUrl']);
            unset($data['moreInfoUrl']);
        }
        elseif (\array_key_exists('moreInfoUrl', $data) && $data['moreInfoUrl'] === null) {
            $object->setMoreInfoUrl(null);
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
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('isBackInStockWatchable', $data) && $data['isBackInStockWatchable'] !== null) {
            $object->setIsBackInStockWatchable($data['isBackInStockWatchable']);
            unset($data['isBackInStockWatchable']);
        }
        elseif (\array_key_exists('isBackInStockWatchable', $data) && $data['isBackInStockWatchable'] === null) {
            $object->setIsBackInStockWatchable(null);
        }
        if (\array_key_exists('bundleUseManualPrice', $data) && $data['bundleUseManualPrice'] !== null) {
            $object->setBundleUseManualPrice($data['bundleUseManualPrice']);
            unset($data['bundleUseManualPrice']);
        }
        elseif (\array_key_exists('bundleUseManualPrice', $data) && $data['bundleUseManualPrice'] === null) {
            $object->setBundleUseManualPrice(null);
        }
        if (\array_key_exists('accounting', $data) && $data['accounting'] !== null) {
            $object->setAccounting($data['accounting']);
            unset($data['accounting']);
        }
        elseif (\array_key_exists('accounting', $data) && $data['accounting'] === null) {
            $object->setAccounting(null);
        }
        if (\array_key_exists('variants', $data) && $data['variants'] !== null) {
            $values_1 = array();
            foreach ($data['variants'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Starweb\\Api\\Generated\\Model\\ProductVariantPutRequestModel', 'json', $context);
            }
            $object->setVariants($values_1);
            unset($data['variants']);
        }
        elseif (\array_key_exists('variants', $data) && $data['variants'] === null) {
            $object->setVariants(null);
        }
        if (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] !== null) {
            $values_2 = array();
            foreach ($data['bundledProducts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\BundledProductsModel', 'json', $context);
            }
            $object->setBundledProducts($values_2);
            unset($data['bundledProducts']);
        }
        elseif (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] === null) {
            $object->setBundledProducts(null);
        }
        if (\array_key_exists('mediaFiles', $data) && $data['mediaFiles'] !== null) {
            $values_3 = array();
            foreach ($data['mediaFiles'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel', 'json', $context);
            }
            $object->setMediaFiles($values_3);
            unset($data['mediaFiles']);
        }
        elseif (\array_key_exists('mediaFiles', $data) && $data['mediaFiles'] === null) {
            $object->setMediaFiles(null);
        }
        if (\array_key_exists('languages', $data) && $data['languages'] !== null) {
            $values_4 = array();
            foreach ($data['languages'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel', 'json', $context);
            }
            $object->setLanguages($values_4);
            unset($data['languages']);
        }
        elseif (\array_key_exists('languages', $data) && $data['languages'] === null) {
            $object->setLanguages(null);
        }
        if (\array_key_exists('vatRates', $data) && $data['vatRates'] !== null) {
            $values_5 = array();
            foreach ($data['vatRates'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel', 'json', $context);
            }
            $object->setVatRates($values_5);
            unset($data['vatRates']);
        }
        elseif (\array_key_exists('vatRates', $data) && $data['vatRates'] === null) {
            $object->setVatRates(null);
        }
        if (\array_key_exists('categories', $data) && $data['categories'] !== null) {
            $values_6 = array();
            foreach ($data['categories'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModel', 'json', $context);
            }
            $object->setCategories($values_6);
            unset($data['categories']);
        }
        elseif (\array_key_exists('categories', $data) && $data['categories'] === null) {
            $object->setCategories(null);
        }
        if (\array_key_exists('metaData', $data) && $data['metaData'] !== null) {
            $values_7 = array();
            foreach ($data['metaData'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelUpdatable', 'json', $context);
            }
            $object->setMetaData($values_7);
            unset($data['metaData']);
        }
        elseif (\array_key_exists('metaData', $data) && $data['metaData'] === null) {
            $object->setMetaData(null);
        }
        foreach ($data as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_8;
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
        if ($object->isInitialized('variants') && null !== $object->getVariants()) {
            $values_1 = array();
            foreach ($object->getVariants() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['variants'] = $values_1;
        }
        if ($object->isInitialized('bundledProducts') && null !== $object->getBundledProducts()) {
            $values_2 = array();
            foreach ($object->getBundledProducts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['bundledProducts'] = $values_2;
        }
        if ($object->isInitialized('mediaFiles') && null !== $object->getMediaFiles()) {
            $values_3 = array();
            foreach ($object->getMediaFiles() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['mediaFiles'] = $values_3;
        }
        if ($object->isInitialized('languages') && null !== $object->getLanguages()) {
            $values_4 = array();
            foreach ($object->getLanguages() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['languages'] = $values_4;
        }
        if ($object->isInitialized('vatRates') && null !== $object->getVatRates()) {
            $values_5 = array();
            foreach ($object->getVatRates() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['vatRates'] = $values_5;
        }
        if ($object->isInitialized('categories') && null !== $object->getCategories()) {
            $values_6 = array();
            foreach ($object->getCategories() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['categories'] = $values_6;
        }
        if ($object->isInitialized('metaData') && null !== $object->getMetaData()) {
            $values_7 = array();
            foreach ($object->getMetaData() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['metaData'] = $values_7;
        }
        foreach ($object as $key => $value_8) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_8;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductModelUpdatable' => false);
    }
}
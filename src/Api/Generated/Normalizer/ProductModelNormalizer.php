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
class ProductModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('productId', $data) && $data['productId'] !== null) {
            $object->setProductId($data['productId']);
            unset($data['productId']);
        }
        elseif (\array_key_exists('productId', $data) && $data['productId'] === null) {
            $object->setProductId(null);
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
        if (\array_key_exists('hasSeveralVariants', $data) && $data['hasSeveralVariants'] !== null) {
            $object->setHasSeveralVariants($data['hasSeveralVariants']);
            unset($data['hasSeveralVariants']);
        }
        elseif (\array_key_exists('hasSeveralVariants', $data) && $data['hasSeveralVariants'] === null) {
            $object->setHasSeveralVariants(null);
        }
        if (\array_key_exists('modifiedAt', $data) && $data['modifiedAt'] !== null) {
            $object->setModifiedAt($data['modifiedAt']);
            unset($data['modifiedAt']);
        }
        elseif (\array_key_exists('modifiedAt', $data) && $data['modifiedAt'] === null) {
            $object->setModifiedAt(null);
        }
        if (\array_key_exists('variants', $data) && $data['variants'] !== null) {
            $object->setVariants($this->denormalizer->denormalize($data['variants'], 'Starweb\\Api\\Generated\\Model\\ProductVariantModelCollection', 'json', $context));
            unset($data['variants']);
        }
        elseif (\array_key_exists('variants', $data) && $data['variants'] === null) {
            $object->setVariants(null);
        }
        if (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] !== null) {
            $object->setBundledProducts($this->denormalizer->denormalize($data['bundledProducts'], 'Starweb\\Api\\Generated\\Model\\BundledProductsModelCollection', 'json', $context));
            unset($data['bundledProducts']);
        }
        elseif (\array_key_exists('bundledProducts', $data) && $data['bundledProducts'] === null) {
            $object->setBundledProducts(null);
        }
        if (\array_key_exists('mediaFiles', $data) && $data['mediaFiles'] !== null) {
            $object->setMediaFiles($this->denormalizer->denormalize($data['mediaFiles'], 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelCollection', 'json', $context));
            unset($data['mediaFiles']);
        }
        elseif (\array_key_exists('mediaFiles', $data) && $data['mediaFiles'] === null) {
            $object->setMediaFiles(null);
        }
        if (\array_key_exists('languages', $data) && $data['languages'] !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], 'Starweb\\Api\\Generated\\Model\\ProductModelLanguages', 'json', $context));
            unset($data['languages']);
        }
        elseif (\array_key_exists('languages', $data) && $data['languages'] === null) {
            $object->setLanguages(null);
        }
        if (\array_key_exists('vatRates', $data) && $data['vatRates'] !== null) {
            $object->setVatRates($this->denormalizer->denormalize($data['vatRates'], 'Starweb\\Api\\Generated\\Model\\ProductVatRateModelCollection', 'json', $context));
            unset($data['vatRates']);
        }
        elseif (\array_key_exists('vatRates', $data) && $data['vatRates'] === null) {
            $object->setVatRates(null);
        }
        if (\array_key_exists('categories', $data) && $data['categories'] !== null) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelCollection', 'json', $context));
            unset($data['categories']);
        }
        elseif (\array_key_exists('categories', $data) && $data['categories'] === null) {
            $object->setCategories(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($this->denormalizer->denormalize($data['unit'], 'Starweb\\Api\\Generated\\Model\\ProductUnitModelItem', 'json', $context));
            unset($data['unit']);
        }
        elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('metaData', $data) && $data['metaData'] !== null) {
            $object->setMetaData($this->denormalizer->denormalize($data['metaData'], 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelCollection', 'json', $context));
            unset($data['metaData']);
        }
        elseif (\array_key_exists('metaData', $data) && $data['metaData'] === null) {
            $object->setMetaData(null);
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
            $data['variants'] = $this->normalizer->normalize($object->getVariants(), 'json', $context);
        }
        if ($object->isInitialized('bundledProducts') && null !== $object->getBundledProducts()) {
            $data['bundledProducts'] = $this->normalizer->normalize($object->getBundledProducts(), 'json', $context);
        }
        if ($object->isInitialized('mediaFiles') && null !== $object->getMediaFiles()) {
            $data['mediaFiles'] = $this->normalizer->normalize($object->getMediaFiles(), 'json', $context);
        }
        if ($object->isInitialized('languages') && null !== $object->getLanguages()) {
            $data['languages'] = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        if ($object->isInitialized('vatRates') && null !== $object->getVatRates()) {
            $data['vatRates'] = $this->normalizer->normalize($object->getVatRates(), 'json', $context);
        }
        if ($object->isInitialized('categories') && null !== $object->getCategories()) {
            $data['categories'] = $this->normalizer->normalize($object->getCategories(), 'json', $context);
        }
        if ($object->isInitialized('unit') && null !== $object->getUnit()) {
            $data['unit'] = $this->normalizer->normalize($object->getUnit(), 'json', $context);
        }
        if ($object->isInitialized('metaData') && null !== $object->getMetaData()) {
            $data['metaData'] = $this->normalizer->normalize($object->getMetaData(), 'json', $context);
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
        return array('Starweb\\Api\\Generated\\Model\\ProductModel' => false);
    }
}
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
        if (\array_key_exists('variants', $data)) {
            $object->setVariants($this->denormalizer->denormalize($data['variants'], 'Starweb\\Api\\Generated\\Model\\ProductVariantModelCollection', 'json', $context));
            unset($data['variants']);
        }
        if (\array_key_exists('bundledProducts', $data)) {
            $object->setBundledProducts($this->denormalizer->denormalize($data['bundledProducts'], 'Starweb\\Api\\Generated\\Model\\BundledProductsModelCollection', 'json', $context));
            unset($data['bundledProducts']);
        }
        if (\array_key_exists('mediaFiles', $data)) {
            $object->setMediaFiles($this->denormalizer->denormalize($data['mediaFiles'], 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelCollection', 'json', $context));
            unset($data['mediaFiles']);
        }
        if (\array_key_exists('languages', $data)) {
            $object->setLanguages($this->denormalizer->denormalize($data['languages'], 'Starweb\\Api\\Generated\\Model\\ProductModelLanguages', 'json', $context));
            unset($data['languages']);
        }
        if (\array_key_exists('vatRates', $data)) {
            $object->setVatRates($this->denormalizer->denormalize($data['vatRates'], 'Starweb\\Api\\Generated\\Model\\ProductVatRateModelCollection', 'json', $context));
            unset($data['vatRates']);
        }
        if (\array_key_exists('categories', $data)) {
            $object->setCategories($this->denormalizer->denormalize($data['categories'], 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelCollection', 'json', $context));
            unset($data['categories']);
        }
        if (\array_key_exists('unit', $data)) {
            $object->setUnit($this->denormalizer->denormalize($data['unit'], 'Starweb\\Api\\Generated\\Model\\ProductUnitModelItem', 'json', $context));
            unset($data['unit']);
        }
        if (\array_key_exists('metaData', $data)) {
            $object->setMetaData($this->denormalizer->denormalize($data['metaData'], 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelCollection', 'json', $context));
            unset($data['metaData']);
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
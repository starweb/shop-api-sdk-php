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
class ProductModelUpdatableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductModelUpdatable';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductModelUpdatable';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductModelUpdatable();
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        elseif (property_exists($data, 'externalId') && $data->{'externalId'} === null) {
            $object->setExternalId(null);
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        elseif (property_exists($data, 'externalIdType') && $data->{'externalIdType'} === null) {
            $object->setExternalIdType(null);
        }
        if (property_exists($data, 'createdAt') && $data->{'createdAt'} !== null) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        elseif (property_exists($data, 'createdAt') && $data->{'createdAt'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'defaultVatRate') && $data->{'defaultVatRate'} !== null) {
            $object->setDefaultVatRate($data->{'defaultVatRate'});
        }
        elseif (property_exists($data, 'defaultVatRate') && $data->{'defaultVatRate'} === null) {
            $object->setDefaultVatRate(null);
        }
        if (property_exists($data, 'visibility') && $data->{'visibility'} !== null) {
            $object->setVisibility($data->{'visibility'});
        }
        elseif (property_exists($data, 'visibility') && $data->{'visibility'} === null) {
            $object->setVisibility(null);
        }
        if (property_exists($data, 'visibilityPricelistIds') && $data->{'visibilityPricelistIds'} !== null) {
            $values = array();
            foreach ($data->{'visibilityPricelistIds'} as $value) {
                $values[] = $value;
            }
            $object->setVisibilityPricelistIds($values);
        }
        elseif (property_exists($data, 'visibilityPricelistIds') && $data->{'visibilityPricelistIds'} === null) {
            $object->setVisibilityPricelistIds(null);
        }
        if (property_exists($data, 'moreInfoUrl') && $data->{'moreInfoUrl'} !== null) {
            $object->setMoreInfoUrl($data->{'moreInfoUrl'});
        }
        elseif (property_exists($data, 'moreInfoUrl') && $data->{'moreInfoUrl'} === null) {
            $object->setMoreInfoUrl(null);
        }
        if (property_exists($data, 'manufacturerId') && $data->{'manufacturerId'} !== null) {
            $object->setManufacturerId($data->{'manufacturerId'});
        }
        elseif (property_exists($data, 'manufacturerId') && $data->{'manufacturerId'} === null) {
            $object->setManufacturerId(null);
        }
        if (property_exists($data, 'unitId') && $data->{'unitId'} !== null) {
            $object->setUnitId($data->{'unitId'});
        }
        elseif (property_exists($data, 'unitId') && $data->{'unitId'} === null) {
            $object->setUnitId(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        elseif (property_exists($data, 'type') && $data->{'type'} === null) {
            $object->setType(null);
        }
        if (property_exists($data, 'isBackInStockWatchable') && $data->{'isBackInStockWatchable'} !== null) {
            $object->setIsBackInStockWatchable($data->{'isBackInStockWatchable'});
        }
        elseif (property_exists($data, 'isBackInStockWatchable') && $data->{'isBackInStockWatchable'} === null) {
            $object->setIsBackInStockWatchable(null);
        }
        if (property_exists($data, 'bundleUseManualPrice') && $data->{'bundleUseManualPrice'} !== null) {
            $object->setBundleUseManualPrice($data->{'bundleUseManualPrice'});
        }
        elseif (property_exists($data, 'bundleUseManualPrice') && $data->{'bundleUseManualPrice'} === null) {
            $object->setBundleUseManualPrice(null);
        }
        if (property_exists($data, 'accounting') && $data->{'accounting'} !== null) {
            $object->setAccounting($data->{'accounting'});
        }
        elseif (property_exists($data, 'accounting') && $data->{'accounting'} === null) {
            $object->setAccounting(null);
        }
        if (property_exists($data, 'variants') && $data->{'variants'} !== null) {
            $values_1 = array();
            foreach ($data->{'variants'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Starweb\\Api\\Generated\\Model\\ProductVariantPutRequestModel', 'json', $context);
            }
            $object->setVariants($values_1);
        }
        elseif (property_exists($data, 'variants') && $data->{'variants'} === null) {
            $object->setVariants(null);
        }
        if (property_exists($data, 'bundledProducts') && $data->{'bundledProducts'} !== null) {
            $values_2 = array();
            foreach ($data->{'bundledProducts'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\BundledProductsModel', 'json', $context);
            }
            $object->setBundledProducts($values_2);
        }
        elseif (property_exists($data, 'bundledProducts') && $data->{'bundledProducts'} === null) {
            $object->setBundledProducts(null);
        }
        if (property_exists($data, 'mediaFiles') && $data->{'mediaFiles'} !== null) {
            $values_3 = array();
            foreach ($data->{'mediaFiles'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel', 'json', $context);
            }
            $object->setMediaFiles($values_3);
        }
        elseif (property_exists($data, 'mediaFiles') && $data->{'mediaFiles'} === null) {
            $object->setMediaFiles(null);
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $values_4 = array();
            foreach ($data->{'languages'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel', 'json', $context);
            }
            $object->setLanguages($values_4);
        }
        elseif (property_exists($data, 'languages') && $data->{'languages'} === null) {
            $object->setLanguages(null);
        }
        if (property_exists($data, 'vatRates') && $data->{'vatRates'} !== null) {
            $values_5 = array();
            foreach ($data->{'vatRates'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel', 'json', $context);
            }
            $object->setVatRates($values_5);
        }
        elseif (property_exists($data, 'vatRates') && $data->{'vatRates'} === null) {
            $object->setVatRates(null);
        }
        if (property_exists($data, 'categories') && $data->{'categories'} !== null) {
            $values_6 = array();
            foreach ($data->{'categories'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModel', 'json', $context);
            }
            $object->setCategories($values_6);
        }
        elseif (property_exists($data, 'categories') && $data->{'categories'} === null) {
            $object->setCategories(null);
        }
        if (property_exists($data, 'metaData') && $data->{'metaData'} !== null) {
            $values_7 = array();
            foreach ($data->{'metaData'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelUpdatable', 'json', $context);
            }
            $object->setMetaData($values_7);
        }
        elseif (property_exists($data, 'metaData') && $data->{'metaData'} === null) {
            $object->setMetaData(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getExternalId()) {
            $data->{'externalId'} = $object->getExternalId();
        }
        else {
            $data->{'externalId'} = null;
        }
        if (null !== $object->getExternalIdType()) {
            $data->{'externalIdType'} = $object->getExternalIdType();
        }
        else {
            $data->{'externalIdType'} = null;
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        else {
            $data->{'createdAt'} = null;
        }
        if (null !== $object->getDefaultVatRate()) {
            $data->{'defaultVatRate'} = $object->getDefaultVatRate();
        }
        else {
            $data->{'defaultVatRate'} = null;
        }
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        else {
            $data->{'visibility'} = null;
        }
        if (null !== $object->getVisibilityPricelistIds()) {
            $values = array();
            foreach ($object->getVisibilityPricelistIds() as $value) {
                $values[] = $value;
            }
            $data->{'visibilityPricelistIds'} = $values;
        }
        else {
            $data->{'visibilityPricelistIds'} = null;
        }
        if (null !== $object->getMoreInfoUrl()) {
            $data->{'moreInfoUrl'} = $object->getMoreInfoUrl();
        }
        else {
            $data->{'moreInfoUrl'} = null;
        }
        if (null !== $object->getManufacturerId()) {
            $data->{'manufacturerId'} = $object->getManufacturerId();
        }
        else {
            $data->{'manufacturerId'} = null;
        }
        if (null !== $object->getUnitId()) {
            $data->{'unitId'} = $object->getUnitId();
        }
        else {
            $data->{'unitId'} = null;
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        else {
            $data->{'type'} = null;
        }
        if (null !== $object->getIsBackInStockWatchable()) {
            $data->{'isBackInStockWatchable'} = $object->getIsBackInStockWatchable();
        }
        else {
            $data->{'isBackInStockWatchable'} = null;
        }
        if (null !== $object->getBundleUseManualPrice()) {
            $data->{'bundleUseManualPrice'} = $object->getBundleUseManualPrice();
        }
        else {
            $data->{'bundleUseManualPrice'} = null;
        }
        if (null !== $object->getAccounting()) {
            $data->{'accounting'} = $object->getAccounting();
        }
        else {
            $data->{'accounting'} = null;
        }
        if (null !== $object->getVariants()) {
            $values_1 = array();
            foreach ($object->getVariants() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'variants'} = $values_1;
        }
        else {
            $data->{'variants'} = null;
        }
        if (null !== $object->getBundledProducts()) {
            $values_2 = array();
            foreach ($object->getBundledProducts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'bundledProducts'} = $values_2;
        }
        else {
            $data->{'bundledProducts'} = null;
        }
        if (null !== $object->getMediaFiles()) {
            $values_3 = array();
            foreach ($object->getMediaFiles() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'mediaFiles'} = $values_3;
        }
        else {
            $data->{'mediaFiles'} = null;
        }
        if (null !== $object->getLanguages()) {
            $values_4 = array();
            foreach ($object->getLanguages() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'languages'} = $values_4;
        }
        else {
            $data->{'languages'} = null;
        }
        if (null !== $object->getVatRates()) {
            $values_5 = array();
            foreach ($object->getVatRates() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'vatRates'} = $values_5;
        }
        else {
            $data->{'vatRates'} = null;
        }
        if (null !== $object->getCategories()) {
            $values_6 = array();
            foreach ($object->getCategories() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'categories'} = $values_6;
        }
        else {
            $data->{'categories'} = null;
        }
        if (null !== $object->getMetaData()) {
            $values_7 = array();
            foreach ($object->getMetaData() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'metaData'} = $values_7;
        }
        else {
            $data->{'metaData'} = null;
        }
        return $data;
    }
}
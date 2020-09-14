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
class ProductModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductModel();
        if (property_exists($data, 'productId') && $data->{'productId'} !== null) {
            $object->setProductId($data->{'productId'});
        }
        elseif (property_exists($data, 'productId') && $data->{'productId'} === null) {
            $object->setProductId(null);
        }
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
        if (property_exists($data, 'hasSeveralVariants') && $data->{'hasSeveralVariants'} !== null) {
            $object->setHasSeveralVariants($data->{'hasSeveralVariants'});
        }
        elseif (property_exists($data, 'hasSeveralVariants') && $data->{'hasSeveralVariants'} === null) {
            $object->setHasSeveralVariants(null);
        }
        if (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} !== null) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        elseif (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} === null) {
            $object->setModifiedAt(null);
        }
        if (property_exists($data, 'variants') && $data->{'variants'} !== null) {
            $object->setVariants($this->denormalizer->denormalize($data->{'variants'}, 'Starweb\\Api\\Generated\\Model\\ProductVariantModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'variants') && $data->{'variants'} === null) {
            $object->setVariants(null);
        }
        if (property_exists($data, 'bundledProducts') && $data->{'bundledProducts'} !== null) {
            $object->setBundledProducts($this->denormalizer->denormalize($data->{'bundledProducts'}, 'Starweb\\Api\\Generated\\Model\\BundledProductsModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'bundledProducts') && $data->{'bundledProducts'} === null) {
            $object->setBundledProducts(null);
        }
        if (property_exists($data, 'mediaFiles') && $data->{'mediaFiles'} !== null) {
            $object->setMediaFiles($this->denormalizer->denormalize($data->{'mediaFiles'}, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'mediaFiles') && $data->{'mediaFiles'} === null) {
            $object->setMediaFiles(null);
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ProductModelLanguages', 'json', $context));
        }
        elseif (property_exists($data, 'languages') && $data->{'languages'} === null) {
            $object->setLanguages(null);
        }
        if (property_exists($data, 'vatRates') && $data->{'vatRates'} !== null) {
            $object->setVatRates($this->denormalizer->denormalize($data->{'vatRates'}, 'Starweb\\Api\\Generated\\Model\\ProductVatRateModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'vatRates') && $data->{'vatRates'} === null) {
            $object->setVatRates(null);
        }
        if (property_exists($data, 'categories') && $data->{'categories'} !== null) {
            $object->setCategories($this->denormalizer->denormalize($data->{'categories'}, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelCollection', 'json', $context));
        }
        elseif (property_exists($data, 'categories') && $data->{'categories'} === null) {
            $object->setCategories(null);
        }
        if (property_exists($data, 'unit') && $data->{'unit'} !== null) {
            $object->setUnit($this->denormalizer->denormalize($data->{'unit'}, 'Starweb\\Api\\Generated\\Model\\ProductUnitModelItem', 'json', $context));
        }
        elseif (property_exists($data, 'unit') && $data->{'unit'} === null) {
            $object->setUnit(null);
        }
        if (property_exists($data, 'metaData') && $data->{'metaData'} !== null) {
            $object->setMetaData($this->denormalizer->denormalize($data->{'metaData'}, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelCollection', 'json', $context));
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
            $data->{'variants'} = $this->normalizer->normalize($object->getVariants(), 'json', $context);
        }
        else {
            $data->{'variants'} = null;
        }
        if (null !== $object->getBundledProducts()) {
            $data->{'bundledProducts'} = $this->normalizer->normalize($object->getBundledProducts(), 'json', $context);
        }
        else {
            $data->{'bundledProducts'} = null;
        }
        if (null !== $object->getMediaFiles()) {
            $data->{'mediaFiles'} = $this->normalizer->normalize($object->getMediaFiles(), 'json', $context);
        }
        else {
            $data->{'mediaFiles'} = null;
        }
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        else {
            $data->{'languages'} = null;
        }
        if (null !== $object->getVatRates()) {
            $data->{'vatRates'} = $this->normalizer->normalize($object->getVatRates(), 'json', $context);
        }
        else {
            $data->{'vatRates'} = null;
        }
        if (null !== $object->getCategories()) {
            $data->{'categories'} = $this->normalizer->normalize($object->getCategories(), 'json', $context);
        }
        else {
            $data->{'categories'} = null;
        }
        if (null !== $object->getUnit()) {
            $data->{'unit'} = $this->normalizer->normalize($object->getUnit(), 'json', $context);
        }
        else {
            $data->{'unit'} = null;
        }
        if (null !== $object->getMetaData()) {
            $data->{'metaData'} = $this->normalizer->normalize($object->getMetaData(), 'json', $context);
        }
        else {
            $data->{'metaData'} = null;
        }
        return $data;
    }
}
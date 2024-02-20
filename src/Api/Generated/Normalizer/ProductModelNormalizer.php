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
        if (property_exists($data, 'externalId') && $data->{'externalId'} !== null) {
            $object->setExternalId($data->{'externalId'});
        }
        if (property_exists($data, 'externalIdType') && $data->{'externalIdType'} !== null) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        if (property_exists($data, 'createdAt') && $data->{'createdAt'} !== null) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'defaultVatRate') && $data->{'defaultVatRate'} !== null) {
            $object->setDefaultVatRate($data->{'defaultVatRate'});
        }
        if (property_exists($data, 'visibility') && $data->{'visibility'} !== null) {
            $object->setVisibility($data->{'visibility'});
        }
        if (property_exists($data, 'visibilityPricelistIds') && $data->{'visibilityPricelistIds'} !== null) {
            $values = array();
            foreach ($data->{'visibilityPricelistIds'} as $value) {
                $values[] = $value;
            }
            $object->setVisibilityPricelistIds($values);
        }
        if (property_exists($data, 'moreInfoUrl') && $data->{'moreInfoUrl'} !== null) {
            $object->setMoreInfoUrl($data->{'moreInfoUrl'});
        }
        if (property_exists($data, 'manufacturerId') && $data->{'manufacturerId'} !== null) {
            $object->setManufacturerId($data->{'manufacturerId'});
        }
        if (property_exists($data, 'unitId') && $data->{'unitId'} !== null) {
            $object->setUnitId($data->{'unitId'});
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'isBackInStockWatchable') && $data->{'isBackInStockWatchable'} !== null) {
            $object->setIsBackInStockWatchable($data->{'isBackInStockWatchable'});
        }
        if (property_exists($data, 'bundleUseManualPrice') && $data->{'bundleUseManualPrice'} !== null) {
            $object->setBundleUseManualPrice($data->{'bundleUseManualPrice'});
        }
        if (property_exists($data, 'priceMode') && $data->{'priceMode'} !== null) {
            $object->setPriceMode($data->{'priceMode'});
        }
        if (property_exists($data, 'accounting') && $data->{'accounting'} !== null) {
            $object->setAccounting($data->{'accounting'});
        }
        if (property_exists($data, 'hasSeveralVariants') && $data->{'hasSeveralVariants'} !== null) {
            $object->setHasSeveralVariants($data->{'hasSeveralVariants'});
        }
        if (property_exists($data, 'modifiedAt') && $data->{'modifiedAt'} !== null) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        if (property_exists($data, 'variants') && $data->{'variants'} !== null) {
            $object->setVariants($this->denormalizer->denormalize($data->{'variants'}, 'Starweb\\Api\\Generated\\Model\\ProductVariantModelCollection', 'json', $context));
        }
        if (property_exists($data, 'bundledProducts') && $data->{'bundledProducts'} !== null) {
            $object->setBundledProducts($this->denormalizer->denormalize($data->{'bundledProducts'}, 'Starweb\\Api\\Generated\\Model\\BundledProductsModelCollection', 'json', $context));
        }
        if (property_exists($data, 'mediaFiles') && $data->{'mediaFiles'} !== null) {
            $object->setMediaFiles($this->denormalizer->denormalize($data->{'mediaFiles'}, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModelCollection', 'json', $context));
        }
        if (property_exists($data, 'languages') && $data->{'languages'} !== null) {
            $object->setLanguages($this->denormalizer->denormalize($data->{'languages'}, 'Starweb\\Api\\Generated\\Model\\ProductModelLanguages', 'json', $context));
        }
        if (property_exists($data, 'vatRates') && $data->{'vatRates'} !== null) {
            $object->setVatRates($this->denormalizer->denormalize($data->{'vatRates'}, 'Starweb\\Api\\Generated\\Model\\ProductVatRateModelCollection', 'json', $context));
        }
        if (property_exists($data, 'categories') && $data->{'categories'} !== null) {
            $object->setCategories($this->denormalizer->denormalize($data->{'categories'}, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModelCollection', 'json', $context));
        }
        if (property_exists($data, 'unit') && $data->{'unit'} !== null) {
            $object->setUnit($this->denormalizer->denormalize($data->{'unit'}, 'Starweb\\Api\\Generated\\Model\\ProductUnitModelItem', 'json', $context));
        }
        if (property_exists($data, 'metaData') && $data->{'metaData'} !== null) {
            $object->setMetaData($this->denormalizer->denormalize($data->{'metaData'}, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelCollection', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'externalId'} = $object->getExternalId();
        $data->{'externalIdType'} = $object->getExternalIdType();
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        $data->{'defaultVatRate'} = $object->getDefaultVatRate();
        if (null !== $object->getVisibility()) {
            $data->{'visibility'} = $object->getVisibility();
        }
        if (null !== $object->getVisibilityPricelistIds()) {
            $values = array();
            foreach ($object->getVisibilityPricelistIds() as $value) {
                $values[] = $value;
            }
            $data->{'visibilityPricelistIds'} = $values;
        }
        if (null !== $object->getMoreInfoUrl()) {
            $data->{'moreInfoUrl'} = $object->getMoreInfoUrl();
        }
        $data->{'manufacturerId'} = $object->getManufacturerId();
        $data->{'unitId'} = $object->getUnitId();
        $data->{'sortIndex'} = $object->getSortIndex();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getIsBackInStockWatchable()) {
            $data->{'isBackInStockWatchable'} = $object->getIsBackInStockWatchable();
        }
        if (null !== $object->getBundleUseManualPrice()) {
            $data->{'bundleUseManualPrice'} = $object->getBundleUseManualPrice();
        }
        if (null !== $object->getPriceMode()) {
            $data->{'priceMode'} = $object->getPriceMode();
        }
        $data->{'accounting'} = $object->getAccounting();
        if (null !== $object->getVariants()) {
            $data->{'variants'} = $this->normalizer->normalize($object->getVariants(), 'json', $context);
        }
        if (null !== $object->getBundledProducts()) {
            $data->{'bundledProducts'} = $this->normalizer->normalize($object->getBundledProducts(), 'json', $context);
        }
        if (null !== $object->getMediaFiles()) {
            $data->{'mediaFiles'} = $this->normalizer->normalize($object->getMediaFiles(), 'json', $context);
        }
        if (null !== $object->getLanguages()) {
            $data->{'languages'} = $this->normalizer->normalize($object->getLanguages(), 'json', $context);
        }
        if (null !== $object->getVatRates()) {
            $data->{'vatRates'} = $this->normalizer->normalize($object->getVatRates(), 'json', $context);
        }
        if (null !== $object->getCategories()) {
            $data->{'categories'} = $this->normalizer->normalize($object->getCategories(), 'json', $context);
        }
        if (null !== $object->getUnit()) {
            $data->{'unit'} = $this->normalizer->normalize($object->getUnit(), 'json', $context);
        }
        if (null !== $object->getMetaData()) {
            $data->{'metaData'} = $this->normalizer->normalize($object->getMetaData(), 'json', $context);
        }
        return $data;
    }
}
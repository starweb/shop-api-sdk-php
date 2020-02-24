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
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\ProductModelUpdatable();
        if (property_exists($data, 'productId')) {
            $object->setProductId($data->{'productId'});
        }
        if (property_exists($data, 'externalId')) {
            $object->setExternalId($data->{'externalId'});
        }
        if (property_exists($data, 'externalIdType')) {
            $object->setExternalIdType($data->{'externalIdType'});
        }
        if (property_exists($data, 'createdAt')) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        if (property_exists($data, 'defaultVatRate')) {
            $object->setDefaultVatRate($data->{'defaultVatRate'});
        }
        if (property_exists($data, 'visibility')) {
            $object->setVisibility($data->{'visibility'});
        }
        if (property_exists($data, 'visibilityPricelistIds')) {
            $values = array();
            foreach ($data->{'visibilityPricelistIds'} as $value) {
                $values[] = $value;
            }
            $object->setVisibilityPricelistIds($values);
        }
        if (property_exists($data, 'moreInfoUrl')) {
            $object->setMoreInfoUrl($data->{'moreInfoUrl'});
        }
        if (property_exists($data, 'manufacturerId')) {
            $object->setManufacturerId($data->{'manufacturerId'});
        }
        if (property_exists($data, 'unitId')) {
            $object->setUnitId($data->{'unitId'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'isBackInStockWatchable')) {
            $object->setIsBackInStockWatchable($data->{'isBackInStockWatchable'});
        }
        if (property_exists($data, 'bundleUseManualPrice')) {
            $object->setBundleUseManualPrice($data->{'bundleUseManualPrice'});
        }
        if (property_exists($data, 'accounting')) {
            $object->setAccounting($data->{'accounting'});
        }
        if (property_exists($data, 'hasSeveralVariants')) {
            $object->setHasSeveralVariants($data->{'hasSeveralVariants'});
        }
        if (property_exists($data, 'modifiedAt')) {
            $object->setModifiedAt($data->{'modifiedAt'});
        }
        if (property_exists($data, 'variants')) {
            $values_1 = array();
            foreach ($data->{'variants'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Starweb\\Api\\Generated\\Model\\ProductVariantPutRequestModel', 'json', $context);
            }
            $object->setVariants($values_1);
        }
        if (property_exists($data, 'bundledProducts')) {
            $values_2 = array();
            foreach ($data->{'bundledProducts'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Starweb\\Api\\Generated\\Model\\BundledProductsModel', 'json', $context);
            }
            $object->setBundledProducts($values_2);
        }
        if (property_exists($data, 'mediaFiles')) {
            $values_3 = array();
            foreach ($data->{'mediaFiles'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Starweb\\Api\\Generated\\Model\\ProductMediaFileLinkModel', 'json', $context);
            }
            $object->setMediaFiles($values_3);
        }
        if (property_exists($data, 'languages')) {
            $values_4 = array();
            foreach ($data->{'languages'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel', 'json', $context);
            }
            $object->setLanguages($values_4);
        }
        if (property_exists($data, 'vatRates')) {
            $values_5 = array();
            foreach ($data->{'vatRates'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Starweb\\Api\\Generated\\Model\\ProductVatRateModel', 'json', $context);
            }
            $object->setVatRates($values_5);
        }
        if (property_exists($data, 'categories')) {
            $values_6 = array();
            foreach ($data->{'categories'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Starweb\\Api\\Generated\\Model\\ProductCategoryLinkModel', 'json', $context);
            }
            $object->setCategories($values_6);
        }
        if (property_exists($data, 'metaData')) {
            $values_7 = array();
            foreach ($data->{'metaData'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Starweb\\Api\\Generated\\Model\\ProductMetaDataModelUpdatable', 'json', $context);
            }
            $object->setMetaData($values_7);
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
        $data->{'bundleUseManualPrice'} = $object->getBundleUseManualPrice();
        $data->{'accounting'} = $object->getAccounting();
        if (null !== $object->getVariants()) {
            $values_1 = array();
            foreach ($object->getVariants() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'variants'} = $values_1;
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
        if (null !== $object->getLanguages()) {
            $values_4 = array();
            foreach ($object->getLanguages() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'languages'} = $values_4;
        }
        if (null !== $object->getVatRates()) {
            $values_5 = array();
            foreach ($object->getVatRates() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'vatRates'} = $values_5;
        }
        if (null !== $object->getCategories()) {
            $values_6 = array();
            foreach ($object->getCategories() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'categories'} = $values_6;
        }
        if (null !== $object->getMetaData()) {
            $values_7 = array();
            foreach ($object->getMetaData() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'metaData'} = $values_7;
        }
        return $data;
    }
}
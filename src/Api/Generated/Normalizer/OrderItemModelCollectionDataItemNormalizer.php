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
class OrderItemModelCollectionDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderItemModelCollectionDataItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderItemModelCollectionDataItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\OrderItemModelCollectionDataItem();
        if (property_exists($data, 'itemId')) {
            $object->setItemId($data->{'itemId'});
        }
        if (property_exists($data, 'sku')) {
            $object->setSku($data->{'sku'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'quantity')) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'unitSymbol')) {
            $object->setUnitSymbol($data->{'unitSymbol'});
        }
        if (property_exists($data, 'unitPrice')) {
            $object->setUnitPrice($data->{'unitPrice'});
        }
        if (property_exists($data, 'vatRate')) {
            $object->setVatRate($data->{'vatRate'});
        }
        if (property_exists($data, 'discount')) {
            $object->setDiscount($data->{'discount'});
        }
        if (property_exists($data, 'discountType')) {
            $object->setDiscountType($data->{'discountType'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'bundledItems')) {
            $object->setBundledItems($this->denormalizer->denormalize($data->{'bundledItems'}, 'Starweb\\Api\\Generated\\Model\\OrderItemBundledModelItemBundledItems', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getUnitSymbol()) {
            $data->{'unitSymbol'} = $object->getUnitSymbol();
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unitPrice'} = $object->getUnitPrice();
        }
        if (null !== $object->getVatRate()) {
            $data->{'vatRate'} = $object->getVatRate();
        }
        if (null !== $object->getDiscount()) {
            $data->{'discount'} = $object->getDiscount();
        }
        if (null !== $object->getDiscountType()) {
            $data->{'discountType'} = $object->getDiscountType();
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        if (null !== $object->getBundledItems()) {
            $data->{'bundledItems'} = $this->normalizer->normalize($object->getBundledItems(), 'json', $context);
        }
        return $data;
    }
}
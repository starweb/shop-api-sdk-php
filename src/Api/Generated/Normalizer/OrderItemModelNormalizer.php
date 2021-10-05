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
class OrderItemModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderItemModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderItemModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\OrderItemModel();
        if (property_exists($data, 'itemId') && $data->{'itemId'} !== null) {
            $object->setItemId($data->{'itemId'});
        }
        elseif (property_exists($data, 'itemId') && $data->{'itemId'} === null) {
            $object->setItemId(null);
        }
        if (property_exists($data, 'sku') && $data->{'sku'} !== null) {
            $object->setSku($data->{'sku'});
        }
        elseif (property_exists($data, 'sku') && $data->{'sku'} === null) {
            $object->setSku(null);
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        }
        elseif (property_exists($data, 'description') && $data->{'description'} === null) {
            $object->setDescription(null);
        }
        if (property_exists($data, 'quantity') && $data->{'quantity'} !== null) {
            $object->setQuantity($data->{'quantity'});
        }
        elseif (property_exists($data, 'quantity') && $data->{'quantity'} === null) {
            $object->setQuantity(null);
        }
        if (property_exists($data, 'unitSymbol') && $data->{'unitSymbol'} !== null) {
            $object->setUnitSymbol($data->{'unitSymbol'});
        }
        elseif (property_exists($data, 'unitSymbol') && $data->{'unitSymbol'} === null) {
            $object->setUnitSymbol(null);
        }
        if (property_exists($data, 'unitPrice') && $data->{'unitPrice'} !== null) {
            $object->setUnitPrice($data->{'unitPrice'});
        }
        elseif (property_exists($data, 'unitPrice') && $data->{'unitPrice'} === null) {
            $object->setUnitPrice(null);
        }
        if (property_exists($data, 'vatRate') && $data->{'vatRate'} !== null) {
            $object->setVatRate($data->{'vatRate'});
        }
        elseif (property_exists($data, 'vatRate') && $data->{'vatRate'} === null) {
            $object->setVatRate(null);
        }
        if (property_exists($data, 'discount') && $data->{'discount'} !== null) {
            $object->setDiscount($data->{'discount'});
        }
        elseif (property_exists($data, 'discount') && $data->{'discount'} === null) {
            $object->setDiscount(null);
        }
        if (property_exists($data, 'discountType') && $data->{'discountType'} !== null) {
            $object->setDiscountType($data->{'discountType'});
        }
        elseif (property_exists($data, 'discountType') && $data->{'discountType'} === null) {
            $object->setDiscountType(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSku()) {
            $data->{'sku'} = $object->getSku();
        }
        else {
            $data->{'sku'} = null;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        else {
            $data->{'description'} = null;
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        else {
            $data->{'quantity'} = null;
        }
        if (null !== $object->getUnitSymbol()) {
            $data->{'unitSymbol'} = $object->getUnitSymbol();
        }
        else {
            $data->{'unitSymbol'} = null;
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unitPrice'} = $object->getUnitPrice();
        }
        else {
            $data->{'unitPrice'} = null;
        }
        if (null !== $object->getVatRate()) {
            $data->{'vatRate'} = $object->getVatRate();
        }
        else {
            $data->{'vatRate'} = null;
        }
        if (null !== $object->getDiscount()) {
            $data->{'discount'} = $object->getDiscount();
        }
        else {
            $data->{'discount'} = null;
        }
        if (null !== $object->getDiscountType()) {
            $data->{'discountType'} = $object->getDiscountType();
        }
        else {
            $data->{'discountType'} = null;
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        return $data;
    }
}
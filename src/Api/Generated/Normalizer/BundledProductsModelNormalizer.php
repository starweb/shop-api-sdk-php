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
class BundledProductsModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\BundledProductsModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\BundledProductsModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\BundledProductsModel();
        if (property_exists($data, 'singleVariant') && $data->{'singleVariant'} !== null) {
            $object->setSingleVariant($data->{'singleVariant'});
        }
        elseif (property_exists($data, 'singleVariant') && $data->{'singleVariant'} === null) {
            $object->setSingleVariant(null);
        }
        if (property_exists($data, 'bundledProductId') && $data->{'bundledProductId'} !== null) {
            $object->setBundledProductId($data->{'bundledProductId'});
        }
        elseif (property_exists($data, 'bundledProductId') && $data->{'bundledProductId'} === null) {
            $object->setBundledProductId(null);
        }
        if (property_exists($data, 'variantSku') && $data->{'variantSku'} !== null) {
            $object->setVariantSku($data->{'variantSku'});
        }
        elseif (property_exists($data, 'variantSku') && $data->{'variantSku'} === null) {
            $object->setVariantSku(null);
        }
        if (property_exists($data, 'quantity') && $data->{'quantity'} !== null) {
            $object->setQuantity($data->{'quantity'});
        }
        elseif (property_exists($data, 'quantity') && $data->{'quantity'} === null) {
            $object->setQuantity(null);
        }
        if (property_exists($data, 'sortIndex') && $data->{'sortIndex'} !== null) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        elseif (property_exists($data, 'sortIndex') && $data->{'sortIndex'} === null) {
            $object->setSortIndex(null);
        }
        if (property_exists($data, 'prices') && $data->{'prices'} !== null) {
            $values = array();
            foreach ($data->{'prices'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModel', 'json', $context);
            }
            $object->setPrices($values);
        }
        elseif (property_exists($data, 'prices') && $data->{'prices'} === null) {
            $object->setPrices(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSingleVariant()) {
            $data->{'singleVariant'} = $object->getSingleVariant();
        }
        else {
            $data->{'singleVariant'} = null;
        }
        if (null !== $object->getBundledProductId()) {
            $data->{'bundledProductId'} = $object->getBundledProductId();
        }
        else {
            $data->{'bundledProductId'} = null;
        }
        if (null !== $object->getVariantSku()) {
            $data->{'variantSku'} = $object->getVariantSku();
        }
        else {
            $data->{'variantSku'} = null;
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        else {
            $data->{'quantity'} = null;
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        else {
            $data->{'sortIndex'} = null;
        }
        if (null !== $object->getPrices()) {
            $values = array();
            foreach ($object->getPrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'prices'} = $values;
        }
        else {
            $data->{'prices'} = null;
        }
        return $data;
    }
}
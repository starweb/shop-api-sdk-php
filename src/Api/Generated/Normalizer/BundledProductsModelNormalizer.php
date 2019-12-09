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
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\BundledProductsModel();
        if (property_exists($data, 'singleVariant')) {
            $object->setSingleVariant($data->{'singleVariant'});
        }
        if (property_exists($data, 'bundledProductId')) {
            $object->setBundledProductId($data->{'bundledProductId'});
        }
        if (property_exists($data, 'variantSku')) {
            $object->setVariantSku($data->{'variantSku'});
        }
        if (property_exists($data, 'quantity')) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'prices')) {
            $values = array();
            foreach ($data->{'prices'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Generated\\Model\\ProductBundleProductPriceModel', 'json', $context);
            }
            $object->setPrices($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSingleVariant()) {
            $data->{'singleVariant'} = $object->getSingleVariant();
        }
        if (null !== $object->getBundledProductId()) {
            $data->{'bundledProductId'} = $object->getBundledProductId();
        }
        if (null !== $object->getVariantSku()) {
            $data->{'variantSku'} = $object->getVariantSku();
        }
        $data->{'quantity'} = $object->getQuantity();
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        if (null !== $object->getPrices()) {
            $values = array();
            foreach ($object->getPrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'prices'} = $values;
        }
        return $data;
    }
}
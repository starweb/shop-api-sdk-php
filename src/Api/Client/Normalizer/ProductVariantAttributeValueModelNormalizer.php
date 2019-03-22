<?php

namespace Starweb\Api\Client\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProductVariantAttributeValueModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeValueModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Starweb\Api\Client\Model\ProductVariantAttributeValueModel;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Client\Model\ProductVariantAttributeValueModel();
        if (property_exists($data, 'attributeValueId')) {
            $object->setAttributeValueId($data->{'attributeValueId'});
        }
        if (property_exists($data, 'skuSuffix')) {
            $object->setSkuSuffix($data->{'skuSuffix'});
        }
        if (property_exists($data, 'sortIndex')) {
            $object->setSortIndex($data->{'sortIndex'});
        }
        if (property_exists($data, 'languages')) {
            $values = array();
            foreach ($data->{'languages'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeValueLanguageModel', 'json', $context);
            }
            $object->setLanguages($values);
        }
        if (property_exists($data, 'attribute')) {
            $object->setAttribute($this->denormalizer->denormalize($data->{'attribute'}, 'Starweb\\Api\\Client\\Model\\ProductVariantAttributeModel', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAttributeValueId()) {
            $data->{'attributeValueId'} = $object->getAttributeValueId();
        }
        if (null !== $object->getSkuSuffix()) {
            $data->{'skuSuffix'} = $object->getSkuSuffix();
        }
        if (null !== $object->getSortIndex()) {
            $data->{'sortIndex'} = $object->getSortIndex();
        }
        if (null !== $object->getLanguages()) {
            $values = array();
            foreach ($object->getLanguages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'languages'} = $values;
        }
        if (null !== $object->getAttribute()) {
            $data->{'attribute'} = $this->normalizer->normalize($object->getAttribute(), 'json', $context);
        }
        return $data;
    }
}
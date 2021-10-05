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
class OrderItemBundledModelItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderItemBundledModelItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderItemBundledModelItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\OrderItemBundledModelItem();
        if (property_exists($data, 'bundledItems') && $data->{'bundledItems'} !== null) {
            $object->setBundledItems($this->denormalizer->denormalize($data->{'bundledItems'}, 'Starweb\\Api\\Generated\\Model\\OrderItemBundledModelItemBundledItems', 'json', $context));
        }
        elseif (property_exists($data, 'bundledItems') && $data->{'bundledItems'} === null) {
            $object->setBundledItems(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBundledItems()) {
            $data->{'bundledItems'} = $this->normalizer->normalize($object->getBundledItems(), 'json', $context);
        }
        else {
            $data->{'bundledItems'} = null;
        }
        return $data;
    }
}
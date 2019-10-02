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
class OrderExternalServiceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderExternalServiceModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderExternalServiceModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\OrderExternalServiceModel();
        if (property_exists($data, 'serviceName')) {
            $object->setServiceName($data->{'serviceName'});
        }
        if (property_exists($data, 'externalIdValue')) {
            $object->setExternalIdValue($data->{'externalIdValue'});
        }
        if (property_exists($data, 'readOnly')) {
            $object->setReadOnly($data->{'readOnly'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getServiceName()) {
            $data->{'serviceName'} = $object->getServiceName();
        }
        if (null !== $object->getExternalIdValue()) {
            $data->{'externalIdValue'} = $object->getExternalIdValue();
        }
        return $data;
    }
}
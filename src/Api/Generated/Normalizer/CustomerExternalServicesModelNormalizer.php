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
class CustomerExternalServicesModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\CustomerExternalServicesModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\CustomerExternalServicesModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\CustomerExternalServicesModel();
        if (property_exists($data, 'serviceName') && $data->{'serviceName'} !== null) {
            $object->setServiceName($data->{'serviceName'});
        }
        elseif (property_exists($data, 'serviceName') && $data->{'serviceName'} === null) {
            $object->setServiceName(null);
        }
        if (property_exists($data, 'externalIdValue') && $data->{'externalIdValue'} !== null) {
            $object->setExternalIdValue($data->{'externalIdValue'});
        }
        elseif (property_exists($data, 'externalIdValue') && $data->{'externalIdValue'} === null) {
            $object->setExternalIdValue(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getServiceName()) {
            $data->{'serviceName'} = $object->getServiceName();
        }
        else {
            $data->{'serviceName'} = null;
        }
        if (null !== $object->getExternalIdValue()) {
            $data->{'externalIdValue'} = $object->getExternalIdValue();
        }
        else {
            $data->{'externalIdValue'} = null;
        }
        return $data;
    }
}
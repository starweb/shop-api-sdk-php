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
class WebHookModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\WebHookModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\WebHookModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\WebHookModel();
        if (property_exists($data, 'webHookId') && $data->{'webHookId'} !== null) {
            $object->setWebHookId($data->{'webHookId'});
        }
        elseif (property_exists($data, 'webHookId') && $data->{'webHookId'} === null) {
            $object->setWebHookId(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'event') && $data->{'event'} !== null) {
            $object->setEvent($data->{'event'});
        }
        elseif (property_exists($data, 'event') && $data->{'event'} === null) {
            $object->setEvent(null);
        }
        if (property_exists($data, 'statusId') && $data->{'statusId'} !== null) {
            $object->setStatusId($data->{'statusId'});
        }
        elseif (property_exists($data, 'statusId') && $data->{'statusId'} === null) {
            $object->setStatusId(null);
        }
        if (property_exists($data, 'url') && $data->{'url'} !== null) {
            $object->setUrl($data->{'url'});
        }
        elseif (property_exists($data, 'url') && $data->{'url'} === null) {
            $object->setUrl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        else {
            $data->{'name'} = null;
        }
        if (null !== $object->getEvent()) {
            $data->{'event'} = $object->getEvent();
        }
        else {
            $data->{'event'} = null;
        }
        if (null !== $object->getStatusId()) {
            $data->{'statusId'} = $object->getStatusId();
        }
        else {
            $data->{'statusId'} = null;
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        else {
            $data->{'url'} = null;
        }
        return $data;
    }
}
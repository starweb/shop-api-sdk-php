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
class OrderCommentModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderCommentModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderCommentModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\OrderCommentModel();
        if (property_exists($data, 'commentId') && $data->{'commentId'} !== null) {
            $object->setCommentId($data->{'commentId'});
        }
        elseif (property_exists($data, 'commentId') && $data->{'commentId'} === null) {
            $object->setCommentId(null);
        }
        if (property_exists($data, 'createdAt') && $data->{'createdAt'} !== null) {
            $object->setCreatedAt($data->{'createdAt'});
        }
        elseif (property_exists($data, 'createdAt') && $data->{'createdAt'} === null) {
            $object->setCreatedAt(null);
        }
        if (property_exists($data, 'text') && $data->{'text'} !== null) {
            $object->setText($data->{'text'});
        }
        elseif (property_exists($data, 'text') && $data->{'text'} === null) {
            $object->setText(null);
        }
        if (property_exists($data, 'from') && $data->{'from'} !== null) {
            $object->setFrom($data->{'from'});
        }
        elseif (property_exists($data, 'from') && $data->{'from'} === null) {
            $object->setFrom(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedAt()) {
            $data->{'createdAt'} = $object->getCreatedAt();
        }
        else {
            $data->{'createdAt'} = null;
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        else {
            $data->{'text'} = null;
        }
        if (null !== $object->getFrom()) {
            $data->{'from'} = $object->getFrom();
        }
        else {
            $data->{'from'} = null;
        }
        return $data;
    }
}
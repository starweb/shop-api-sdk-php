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
class ProductLanguageSlimModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductLanguageSlimModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductLanguageSlimModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductLanguageSlimModel();
        if (property_exists($data, 'langCode') && $data->{'langCode'} !== null) {
            $object->setLangCode($data->{'langCode'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'shortDescription') && $data->{'shortDescription'} !== null) {
            $object->setShortDescription($data->{'shortDescription'});
        }
        if (property_exists($data, 'permalink') && $data->{'permalink'} !== null) {
            $object->setPermalink($data->{'permalink'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getShortDescription()) {
            $data->{'shortDescription'} = $object->getShortDescription();
        }
        if (null !== $object->getPermalink()) {
            $data->{'permalink'} = $object->getPermalink();
        }
        return $data;
    }
}
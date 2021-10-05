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
class ProductLanguageModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ProductLanguageModel();
        if (property_exists($data, 'langCode') && $data->{'langCode'} !== null) {
            $object->setLangCode($data->{'langCode'});
        }
        elseif (property_exists($data, 'langCode') && $data->{'langCode'} === null) {
            $object->setLangCode(null);
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        elseif (property_exists($data, 'name') && $data->{'name'} === null) {
            $object->setName(null);
        }
        if (property_exists($data, 'shortDescription') && $data->{'shortDescription'} !== null) {
            $object->setShortDescription($data->{'shortDescription'});
        }
        elseif (property_exists($data, 'shortDescription') && $data->{'shortDescription'} === null) {
            $object->setShortDescription(null);
        }
        if (property_exists($data, 'longDescription') && $data->{'longDescription'} !== null) {
            $object->setLongDescription($data->{'longDescription'});
        }
        elseif (property_exists($data, 'longDescription') && $data->{'longDescription'} === null) {
            $object->setLongDescription(null);
        }
        if (property_exists($data, 'permalink') && $data->{'permalink'} !== null) {
            $object->setPermalink($data->{'permalink'});
        }
        elseif (property_exists($data, 'permalink') && $data->{'permalink'} === null) {
            $object->setPermalink(null);
        }
        if (property_exists($data, 'pageTitle') && $data->{'pageTitle'} !== null) {
            $object->setPageTitle($data->{'pageTitle'});
        }
        elseif (property_exists($data, 'pageTitle') && $data->{'pageTitle'} === null) {
            $object->setPageTitle(null);
        }
        if (property_exists($data, 'pageMetaDescription') && $data->{'pageMetaDescription'} !== null) {
            $object->setPageMetaDescription($data->{'pageMetaDescription'});
        }
        elseif (property_exists($data, 'pageMetaDescription') && $data->{'pageMetaDescription'} === null) {
            $object->setPageMetaDescription(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLangCode()) {
            $data->{'langCode'} = $object->getLangCode();
        }
        else {
            $data->{'langCode'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        else {
            $data->{'name'} = null;
        }
        if (null !== $object->getShortDescription()) {
            $data->{'shortDescription'} = $object->getShortDescription();
        }
        else {
            $data->{'shortDescription'} = null;
        }
        if (null !== $object->getLongDescription()) {
            $data->{'longDescription'} = $object->getLongDescription();
        }
        else {
            $data->{'longDescription'} = null;
        }
        if (null !== $object->getPermalink()) {
            $data->{'permalink'} = $object->getPermalink();
        }
        else {
            $data->{'permalink'} = null;
        }
        if (null !== $object->getPageTitle()) {
            $data->{'pageTitle'} = $object->getPageTitle();
        }
        else {
            $data->{'pageTitle'} = null;
        }
        if (null !== $object->getPageMetaDescription()) {
            $data->{'pageMetaDescription'} = $object->getPageMetaDescription();
        }
        else {
            $data->{'pageMetaDescription'} = null;
        }
        return $data;
    }
}
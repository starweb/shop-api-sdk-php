<?php

namespace Starweb\Api\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Starweb\Api\Generated\Runtime\Normalizer\CheckArray;
use Starweb\Api\Generated\Runtime\Normalizer\ValidatorTrait;
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
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductLanguageModel';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Starweb\Api\Generated\Model\ProductLanguageModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('langCode', $data) && $data['langCode'] !== null) {
            $object->setLangCode($data['langCode']);
            unset($data['langCode']);
        }
        elseif (\array_key_exists('langCode', $data) && $data['langCode'] === null) {
            $object->setLangCode(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('shortDescription', $data) && $data['shortDescription'] !== null) {
            $object->setShortDescription($data['shortDescription']);
            unset($data['shortDescription']);
        }
        elseif (\array_key_exists('shortDescription', $data) && $data['shortDescription'] === null) {
            $object->setShortDescription(null);
        }
        if (\array_key_exists('longDescription', $data) && $data['longDescription'] !== null) {
            $object->setLongDescription($data['longDescription']);
            unset($data['longDescription']);
        }
        elseif (\array_key_exists('longDescription', $data) && $data['longDescription'] === null) {
            $object->setLongDescription(null);
        }
        if (\array_key_exists('permalink', $data) && $data['permalink'] !== null) {
            $object->setPermalink($data['permalink']);
            unset($data['permalink']);
        }
        elseif (\array_key_exists('permalink', $data) && $data['permalink'] === null) {
            $object->setPermalink(null);
        }
        if (\array_key_exists('pageTitle', $data) && $data['pageTitle'] !== null) {
            $object->setPageTitle($data['pageTitle']);
            unset($data['pageTitle']);
        }
        elseif (\array_key_exists('pageTitle', $data) && $data['pageTitle'] === null) {
            $object->setPageTitle(null);
        }
        if (\array_key_exists('pageMetaDescription', $data) && $data['pageMetaDescription'] !== null) {
            $object->setPageMetaDescription($data['pageMetaDescription']);
            unset($data['pageMetaDescription']);
        }
        elseif (\array_key_exists('pageMetaDescription', $data) && $data['pageMetaDescription'] === null) {
            $object->setPageMetaDescription(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['langCode'] = $object->getLangCode();
        $data['name'] = $object->getName();
        if ($object->isInitialized('shortDescription') && null !== $object->getShortDescription()) {
            $data['shortDescription'] = $object->getShortDescription();
        }
        if ($object->isInitialized('longDescription') && null !== $object->getLongDescription()) {
            $data['longDescription'] = $object->getLongDescription();
        }
        if ($object->isInitialized('permalink') && null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
        }
        if ($object->isInitialized('pageTitle') && null !== $object->getPageTitle()) {
            $data['pageTitle'] = $object->getPageTitle();
        }
        if ($object->isInitialized('pageMetaDescription') && null !== $object->getPageMetaDescription()) {
            $data['pageMetaDescription'] = $object->getPageMetaDescription();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ProductLanguageModel' => false);
    }
}
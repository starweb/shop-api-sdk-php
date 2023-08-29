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
class ProductCategoryLanguagesModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductCategoryLanguagesModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('langCode', $data)) {
            $object->setLangCode($data['langCode']);
            unset($data['langCode']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('pageTitle', $data)) {
            $object->setPageTitle($data['pageTitle']);
            unset($data['pageTitle']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('bottomDescription', $data)) {
            $object->setBottomDescription($data['bottomDescription']);
            unset($data['bottomDescription']);
        }
        if (\array_key_exists('pageMetaDescription', $data)) {
            $object->setPageMetaDescription($data['pageMetaDescription']);
            unset($data['pageMetaDescription']);
        }
        if (\array_key_exists('permalink', $data)) {
            $object->setPermalink($data['permalink']);
            unset($data['permalink']);
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
        if ($object->isInitialized('langCode') && null !== $object->getLangCode()) {
            $data['langCode'] = $object->getLangCode();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('pageTitle') && null !== $object->getPageTitle()) {
            $data['pageTitle'] = $object->getPageTitle();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('bottomDescription') && null !== $object->getBottomDescription()) {
            $data['bottomDescription'] = $object->getBottomDescription();
        }
        if ($object->isInitialized('pageMetaDescription') && null !== $object->getPageMetaDescription()) {
            $data['pageMetaDescription'] = $object->getPageMetaDescription();
        }
        if ($object->isInitialized('permalink') && null !== $object->getPermalink()) {
            $data['permalink'] = $object->getPermalink();
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
        return array('Starweb\\Api\\Generated\\Model\\ProductCategoryLanguagesModel' => false);
    }
}
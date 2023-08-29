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
class ShopModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ShopModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ShopModel';
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
        $object = new \Starweb\Api\Generated\Model\ShopModel();
        if (\array_key_exists('generalDefaultVatRate', $data) && \is_int($data['generalDefaultVatRate'])) {
            $data['generalDefaultVatRate'] = (double) $data['generalDefaultVatRate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('idCode', $data)) {
            $object->setIdCode($data['idCode']);
            unset($data['idCode']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('defaultLangCode', $data)) {
            $object->setDefaultLangCode($data['defaultLangCode']);
            unset($data['defaultLangCode']);
        }
        if (\array_key_exists('activeLangCodes', $data)) {
            $values = array();
            foreach ($data['activeLangCodes'] as $value) {
                $values[] = $value;
            }
            $object->setActiveLangCodes($values);
            unset($data['activeLangCodes']);
        }
        if (\array_key_exists('baseCurrency', $data)) {
            $object->setBaseCurrency($data['baseCurrency']);
            unset($data['baseCurrency']);
        }
        if (\array_key_exists('defaultCustomerCountryCode', $data)) {
            $object->setDefaultCustomerCountryCode($data['defaultCustomerCountryCode']);
            unset($data['defaultCustomerCountryCode']);
        }
        if (\array_key_exists('generalDefaultVatRate', $data)) {
            $object->setGeneralDefaultVatRate($data['generalDefaultVatRate']);
            unset($data['generalDefaultVatRate']);
        }
        if (\array_key_exists('shopCompanyName', $data)) {
            $object->setShopCompanyName($data['shopCompanyName']);
            unset($data['shopCompanyName']);
        }
        if (\array_key_exists('shopAddress', $data)) {
            $object->setShopAddress($data['shopAddress']);
            unset($data['shopAddress']);
        }
        if (\array_key_exists('shopPostalCode', $data)) {
            $object->setShopPostalCode($data['shopPostalCode']);
            unset($data['shopPostalCode']);
        }
        if (\array_key_exists('shopCity', $data)) {
            $object->setShopCity($data['shopCity']);
            unset($data['shopCity']);
        }
        if (\array_key_exists('shopOrgNo', $data)) {
            $object->setShopOrgNo($data['shopOrgNo']);
            unset($data['shopOrgNo']);
        }
        if (\array_key_exists('shopPhoneNo', $data)) {
            $object->setShopPhoneNo($data['shopPhoneNo']);
            unset($data['shopPhoneNo']);
        }
        if (\array_key_exists('shopVatNo', $data)) {
            $object->setShopVatNo($data['shopVatNo']);
            unset($data['shopVatNo']);
        }
        if (\array_key_exists('shopCountryCode', $data)) {
            $object->setShopCountryCode($data['shopCountryCode']);
            unset($data['shopCountryCode']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Starweb\\Api\\Generated\\Model\\ShopModel' => false);
    }
}
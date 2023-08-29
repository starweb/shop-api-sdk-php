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
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('idCode', $data) && $data['idCode'] !== null) {
            $object->setIdCode($data['idCode']);
            unset($data['idCode']);
        }
        elseif (\array_key_exists('idCode', $data) && $data['idCode'] === null) {
            $object->setIdCode(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('defaultLangCode', $data) && $data['defaultLangCode'] !== null) {
            $object->setDefaultLangCode($data['defaultLangCode']);
            unset($data['defaultLangCode']);
        }
        elseif (\array_key_exists('defaultLangCode', $data) && $data['defaultLangCode'] === null) {
            $object->setDefaultLangCode(null);
        }
        if (\array_key_exists('activeLangCodes', $data) && $data['activeLangCodes'] !== null) {
            $values = array();
            foreach ($data['activeLangCodes'] as $value) {
                $values[] = $value;
            }
            $object->setActiveLangCodes($values);
            unset($data['activeLangCodes']);
        }
        elseif (\array_key_exists('activeLangCodes', $data) && $data['activeLangCodes'] === null) {
            $object->setActiveLangCodes(null);
        }
        if (\array_key_exists('baseCurrency', $data) && $data['baseCurrency'] !== null) {
            $object->setBaseCurrency($data['baseCurrency']);
            unset($data['baseCurrency']);
        }
        elseif (\array_key_exists('baseCurrency', $data) && $data['baseCurrency'] === null) {
            $object->setBaseCurrency(null);
        }
        if (\array_key_exists('defaultCustomerCountryCode', $data) && $data['defaultCustomerCountryCode'] !== null) {
            $object->setDefaultCustomerCountryCode($data['defaultCustomerCountryCode']);
            unset($data['defaultCustomerCountryCode']);
        }
        elseif (\array_key_exists('defaultCustomerCountryCode', $data) && $data['defaultCustomerCountryCode'] === null) {
            $object->setDefaultCustomerCountryCode(null);
        }
        if (\array_key_exists('generalDefaultVatRate', $data) && $data['generalDefaultVatRate'] !== null) {
            $object->setGeneralDefaultVatRate($data['generalDefaultVatRate']);
            unset($data['generalDefaultVatRate']);
        }
        elseif (\array_key_exists('generalDefaultVatRate', $data) && $data['generalDefaultVatRate'] === null) {
            $object->setGeneralDefaultVatRate(null);
        }
        if (\array_key_exists('shopCompanyName', $data) && $data['shopCompanyName'] !== null) {
            $object->setShopCompanyName($data['shopCompanyName']);
            unset($data['shopCompanyName']);
        }
        elseif (\array_key_exists('shopCompanyName', $data) && $data['shopCompanyName'] === null) {
            $object->setShopCompanyName(null);
        }
        if (\array_key_exists('shopAddress', $data) && $data['shopAddress'] !== null) {
            $object->setShopAddress($data['shopAddress']);
            unset($data['shopAddress']);
        }
        elseif (\array_key_exists('shopAddress', $data) && $data['shopAddress'] === null) {
            $object->setShopAddress(null);
        }
        if (\array_key_exists('shopPostalCode', $data) && $data['shopPostalCode'] !== null) {
            $object->setShopPostalCode($data['shopPostalCode']);
            unset($data['shopPostalCode']);
        }
        elseif (\array_key_exists('shopPostalCode', $data) && $data['shopPostalCode'] === null) {
            $object->setShopPostalCode(null);
        }
        if (\array_key_exists('shopCity', $data) && $data['shopCity'] !== null) {
            $object->setShopCity($data['shopCity']);
            unset($data['shopCity']);
        }
        elseif (\array_key_exists('shopCity', $data) && $data['shopCity'] === null) {
            $object->setShopCity(null);
        }
        if (\array_key_exists('shopOrgNo', $data) && $data['shopOrgNo'] !== null) {
            $object->setShopOrgNo($data['shopOrgNo']);
            unset($data['shopOrgNo']);
        }
        elseif (\array_key_exists('shopOrgNo', $data) && $data['shopOrgNo'] === null) {
            $object->setShopOrgNo(null);
        }
        if (\array_key_exists('shopPhoneNo', $data) && $data['shopPhoneNo'] !== null) {
            $object->setShopPhoneNo($data['shopPhoneNo']);
            unset($data['shopPhoneNo']);
        }
        elseif (\array_key_exists('shopPhoneNo', $data) && $data['shopPhoneNo'] === null) {
            $object->setShopPhoneNo(null);
        }
        if (\array_key_exists('shopVatNo', $data) && $data['shopVatNo'] !== null) {
            $object->setShopVatNo($data['shopVatNo']);
            unset($data['shopVatNo']);
        }
        elseif (\array_key_exists('shopVatNo', $data) && $data['shopVatNo'] === null) {
            $object->setShopVatNo(null);
        }
        if (\array_key_exists('shopCountryCode', $data) && $data['shopCountryCode'] !== null) {
            $object->setShopCountryCode($data['shopCountryCode']);
            unset($data['shopCountryCode']);
        }
        elseif (\array_key_exists('shopCountryCode', $data) && $data['shopCountryCode'] === null) {
            $object->setShopCountryCode(null);
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
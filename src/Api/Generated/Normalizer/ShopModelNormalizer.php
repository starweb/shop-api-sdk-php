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
class ShopModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ShopModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ShopModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ShopModel();
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'idCode') && $data->{'idCode'} !== null) {
            $object->setIdCode($data->{'idCode'});
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'defaultLangCode') && $data->{'defaultLangCode'} !== null) {
            $object->setDefaultLangCode($data->{'defaultLangCode'});
        }
        if (property_exists($data, 'activeLangCodes') && $data->{'activeLangCodes'} !== null) {
            $values = array();
            foreach ($data->{'activeLangCodes'} as $value) {
                $values[] = $value;
            }
            $object->setActiveLangCodes($values);
        }
        if (property_exists($data, 'baseCurrency') && $data->{'baseCurrency'} !== null) {
            $object->setBaseCurrency($data->{'baseCurrency'});
        }
        if (property_exists($data, 'defaultCustomerCountryCode') && $data->{'defaultCustomerCountryCode'} !== null) {
            $object->setDefaultCustomerCountryCode($data->{'defaultCustomerCountryCode'});
        }
        if (property_exists($data, 'generalDefaultVatRate') && $data->{'generalDefaultVatRate'} !== null) {
            $object->setGeneralDefaultVatRate($data->{'generalDefaultVatRate'});
        }
        if (property_exists($data, 'shopCompanyName') && $data->{'shopCompanyName'} !== null) {
            $object->setShopCompanyName($data->{'shopCompanyName'});
        }
        if (property_exists($data, 'shopAddress') && $data->{'shopAddress'} !== null) {
            $object->setShopAddress($data->{'shopAddress'});
        }
        if (property_exists($data, 'shopPostalCode') && $data->{'shopPostalCode'} !== null) {
            $object->setShopPostalCode($data->{'shopPostalCode'});
        }
        if (property_exists($data, 'shopCity') && $data->{'shopCity'} !== null) {
            $object->setShopCity($data->{'shopCity'});
        }
        if (property_exists($data, 'shopOrgNo') && $data->{'shopOrgNo'} !== null) {
            $object->setShopOrgNo($data->{'shopOrgNo'});
        }
        if (property_exists($data, 'shopPhoneNo') && $data->{'shopPhoneNo'} !== null) {
            $object->setShopPhoneNo($data->{'shopPhoneNo'});
        }
        if (property_exists($data, 'shopVatNo') && $data->{'shopVatNo'} !== null) {
            $object->setShopVatNo($data->{'shopVatNo'});
        }
        if (property_exists($data, 'shopCountryCode') && $data->{'shopCountryCode'} !== null) {
            $object->setShopCountryCode($data->{'shopCountryCode'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        return $data;
    }
}
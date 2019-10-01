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
        return get_class($data) === 'Starweb\\Api\\Generated\\Model\\ShopModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Starweb\Api\Generated\Model\ShopModel();
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'idCode')) {
            $object->setIdCode($data->{'idCode'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'defaultLangCode')) {
            $object->setDefaultLangCode($data->{'defaultLangCode'});
        }
        if (property_exists($data, 'activeLangCodes')) {
            $values = array();
            foreach ($data->{'activeLangCodes'} as $value) {
                $values[] = $value;
            }
            $object->setActiveLangCodes($values);
        }
        if (property_exists($data, 'baseCurrency')) {
            $object->setBaseCurrency($data->{'baseCurrency'});
        }
        if (property_exists($data, 'defaultCustomerCountryCode')) {
            $object->setDefaultCustomerCountryCode($data->{'defaultCustomerCountryCode'});
        }
        if (property_exists($data, 'generalDefaultVatRate')) {
            $object->setGeneralDefaultVatRate($data->{'generalDefaultVatRate'});
        }
        if (property_exists($data, 'shopCompanyName')) {
            $object->setShopCompanyName($data->{'shopCompanyName'});
        }
        if (property_exists($data, 'shopAddress')) {
            $object->setShopAddress($data->{'shopAddress'});
        }
        if (property_exists($data, 'shopPostalCode')) {
            $object->setShopPostalCode($data->{'shopPostalCode'});
        }
        if (property_exists($data, 'shopCity')) {
            $object->setShopCity($data->{'shopCity'});
        }
        if (property_exists($data, 'shopOrgNo')) {
            $object->setShopOrgNo($data->{'shopOrgNo'});
        }
        if (property_exists($data, 'shopPhoneNo')) {
            $object->setShopPhoneNo($data->{'shopPhoneNo'});
        }
        if (property_exists($data, 'shopVatNo')) {
            $object->setShopVatNo($data->{'shopVatNo'});
        }
        if (property_exists($data, 'shopCountryCode')) {
            $object->setShopCountryCode($data->{'shopCountryCode'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getIdCode()) {
            $data->{'idCode'} = $object->getIdCode();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getDefaultLangCode()) {
            $data->{'defaultLangCode'} = $object->getDefaultLangCode();
        }
        if (null !== $object->getActiveLangCodes()) {
            $values = array();
            foreach ($object->getActiveLangCodes() as $value) {
                $values[] = $value;
            }
            $data->{'activeLangCodes'} = $values;
        }
        if (null !== $object->getBaseCurrency()) {
            $data->{'baseCurrency'} = $object->getBaseCurrency();
        }
        if (null !== $object->getDefaultCustomerCountryCode()) {
            $data->{'defaultCustomerCountryCode'} = $object->getDefaultCustomerCountryCode();
        }
        if (null !== $object->getGeneralDefaultVatRate()) {
            $data->{'generalDefaultVatRate'} = $object->getGeneralDefaultVatRate();
        }
        if (null !== $object->getShopCompanyName()) {
            $data->{'shopCompanyName'} = $object->getShopCompanyName();
        }
        if (null !== $object->getShopAddress()) {
            $data->{'shopAddress'} = $object->getShopAddress();
        }
        if (null !== $object->getShopPostalCode()) {
            $data->{'shopPostalCode'} = $object->getShopPostalCode();
        }
        if (null !== $object->getShopCity()) {
            $data->{'shopCity'} = $object->getShopCity();
        }
        if (null !== $object->getShopOrgNo()) {
            $data->{'shopOrgNo'} = $object->getShopOrgNo();
        }
        if (null !== $object->getShopPhoneNo()) {
            $data->{'shopPhoneNo'} = $object->getShopPhoneNo();
        }
        if (null !== $object->getShopVatNo()) {
            $data->{'shopVatNo'} = $object->getShopVatNo();
        }
        if (null !== $object->getShopCountryCode()) {
            $data->{'shopCountryCode'} = $object->getShopCountryCode();
        }
        return $data;
    }
}
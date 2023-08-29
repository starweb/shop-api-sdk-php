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
class CustomerUpdateModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModel';
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
        $object = new \Starweb\Api\Generated\Model\CustomerUpdateModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerId', $data)) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        if (\array_key_exists('createdAt', $data)) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('nationalIdNo', $data)) {
            $object->setNationalIdNo($data['nationalIdNo']);
            unset($data['nationalIdNo']);
        }
        if (\array_key_exists('vatNo', $data)) {
            $object->setVatNo($data['vatNo']);
            unset($data['vatNo']);
        }
        if (\array_key_exists('customInfo1', $data)) {
            $object->setCustomInfo1($data['customInfo1']);
            unset($data['customInfo1']);
        }
        if (\array_key_exists('customInfo2', $data)) {
            $object->setCustomInfo2($data['customInfo2']);
            unset($data['customInfo2']);
        }
        if (\array_key_exists('pricelistId', $data) && $data['pricelistId'] !== null) {
            $object->setPricelistId($data['pricelistId']);
            unset($data['pricelistId']);
        }
        elseif (\array_key_exists('pricelistId', $data) && $data['pricelistId'] === null) {
            $object->setPricelistId(null);
        }
        if (\array_key_exists('langCode', $data)) {
            $object->setLangCode($data['langCode']);
            unset($data['langCode']);
        }
        if (\array_key_exists('addresses', $data)) {
            $object->setAddresses($this->denormalizer->denormalize($data['addresses'], 'Starweb\\Api\\Generated\\Model\\CustomerUpdateModelAddresses', 'json', $context));
            unset($data['addresses']);
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
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['createdAt'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('nationalIdNo') && null !== $object->getNationalIdNo()) {
            $data['nationalIdNo'] = $object->getNationalIdNo();
        }
        if ($object->isInitialized('vatNo') && null !== $object->getVatNo()) {
            $data['vatNo'] = $object->getVatNo();
        }
        if ($object->isInitialized('customInfo1') && null !== $object->getCustomInfo1()) {
            $data['customInfo1'] = $object->getCustomInfo1();
        }
        if ($object->isInitialized('customInfo2') && null !== $object->getCustomInfo2()) {
            $data['customInfo2'] = $object->getCustomInfo2();
        }
        if ($object->isInitialized('pricelistId') && null !== $object->getPricelistId()) {
            $data['pricelistId'] = $object->getPricelistId();
        }
        if ($object->isInitialized('addresses') && null !== $object->getAddresses()) {
            $data['addresses'] = $this->normalizer->normalize($object->getAddresses(), 'json', $context);
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
        return array('Starweb\\Api\\Generated\\Model\\CustomerUpdateModel' => false);
    }
}
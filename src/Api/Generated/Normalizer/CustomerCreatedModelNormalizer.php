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
class CustomerCreatedModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\CustomerCreatedModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\CustomerCreatedModel';
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
        $object = new \Starweb\Api\Generated\Model\CustomerCreatedModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->setCustomerId($data['customerId']);
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('createdAt', $data) && $data['createdAt'] !== null) {
            $object->setCreatedAt($data['createdAt']);
            unset($data['createdAt']);
        }
        elseif (\array_key_exists('createdAt', $data) && $data['createdAt'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('nationalIdNo', $data) && $data['nationalIdNo'] !== null) {
            $object->setNationalIdNo($data['nationalIdNo']);
            unset($data['nationalIdNo']);
        }
        elseif (\array_key_exists('nationalIdNo', $data) && $data['nationalIdNo'] === null) {
            $object->setNationalIdNo(null);
        }
        if (\array_key_exists('vatNo', $data) && $data['vatNo'] !== null) {
            $object->setVatNo($data['vatNo']);
            unset($data['vatNo']);
        }
        elseif (\array_key_exists('vatNo', $data) && $data['vatNo'] === null) {
            $object->setVatNo(null);
        }
        if (\array_key_exists('customInfo1', $data) && $data['customInfo1'] !== null) {
            $object->setCustomInfo1($data['customInfo1']);
            unset($data['customInfo1']);
        }
        elseif (\array_key_exists('customInfo1', $data) && $data['customInfo1'] === null) {
            $object->setCustomInfo1(null);
        }
        if (\array_key_exists('customInfo2', $data) && $data['customInfo2'] !== null) {
            $object->setCustomInfo2($data['customInfo2']);
            unset($data['customInfo2']);
        }
        elseif (\array_key_exists('customInfo2', $data) && $data['customInfo2'] === null) {
            $object->setCustomInfo2(null);
        }
        if (\array_key_exists('modifiedAt', $data) && $data['modifiedAt'] !== null) {
            $object->setModifiedAt($data['modifiedAt']);
            unset($data['modifiedAt']);
        }
        elseif (\array_key_exists('modifiedAt', $data) && $data['modifiedAt'] === null) {
            $object->setModifiedAt(null);
        }
        if (\array_key_exists('approved', $data) && $data['approved'] !== null) {
            $object->setApproved($data['approved']);
            unset($data['approved']);
        }
        elseif (\array_key_exists('approved', $data) && $data['approved'] === null) {
            $object->setApproved(null);
        }
        if (\array_key_exists('approvedAt', $data) && $data['approvedAt'] !== null) {
            $object->setApprovedAt($data['approvedAt']);
            unset($data['approvedAt']);
        }
        elseif (\array_key_exists('approvedAt', $data) && $data['approvedAt'] === null) {
            $object->setApprovedAt(null);
        }
        if (\array_key_exists('pricelistId', $data) && $data['pricelistId'] !== null) {
            $object->setPricelistId($data['pricelistId']);
            unset($data['pricelistId']);
        }
        elseif (\array_key_exists('pricelistId', $data) && $data['pricelistId'] === null) {
            $object->setPricelistId(null);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
            unset($data['externalId']);
        }
        elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('externalIdType', $data) && $data['externalIdType'] !== null) {
            $object->setExternalIdType($data['externalIdType']);
            unset($data['externalIdType']);
        }
        elseif (\array_key_exists('externalIdType', $data) && $data['externalIdType'] === null) {
            $object->setExternalIdType(null);
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
        if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
            $data['externalId'] = $object->getExternalId();
        }
        if ($object->isInitialized('externalIdType') && null !== $object->getExternalIdType()) {
            $data['externalIdType'] = $object->getExternalIdType();
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
        return array('Starweb\\Api\\Generated\\Model\\CustomerCreatedModel' => false);
    }
}
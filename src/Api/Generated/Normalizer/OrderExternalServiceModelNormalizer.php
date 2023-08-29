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
class OrderExternalServiceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\OrderExternalServiceModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\OrderExternalServiceModel';
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
        $object = new \Starweb\Api\Generated\Model\OrderExternalServiceModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('serviceName', $data) && $data['serviceName'] !== null) {
            $object->setServiceName($data['serviceName']);
            unset($data['serviceName']);
        }
        elseif (\array_key_exists('serviceName', $data) && $data['serviceName'] === null) {
            $object->setServiceName(null);
        }
        if (\array_key_exists('externalIdValue', $data) && $data['externalIdValue'] !== null) {
            $object->setExternalIdValue($data['externalIdValue']);
            unset($data['externalIdValue']);
        }
        elseif (\array_key_exists('externalIdValue', $data) && $data['externalIdValue'] === null) {
            $object->setExternalIdValue(null);
        }
        if (\array_key_exists('agent', $data) && $data['agent'] !== null) {
            $object->setAgent($data['agent']);
            unset($data['agent']);
        }
        elseif (\array_key_exists('agent', $data) && $data['agent'] === null) {
            $object->setAgent(null);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
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
        if ($object->isInitialized('serviceName') && null !== $object->getServiceName()) {
            $data['serviceName'] = $object->getServiceName();
        }
        if ($object->isInitialized('externalIdValue') && null !== $object->getExternalIdValue()) {
            $data['externalIdValue'] = $object->getExternalIdValue();
        }
        if ($object->isInitialized('agent') && null !== $object->getAgent()) {
            $data['agent'] = $object->getAgent();
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
        return array('Starweb\\Api\\Generated\\Model\\OrderExternalServiceModel' => false);
    }
}
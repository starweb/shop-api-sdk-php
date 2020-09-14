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
class ClientCredentialModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ClientCredentialModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ClientCredentialModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\ClientCredentialModel();
        if (property_exists($data, 'grant_type') && $data->{'grant_type'} !== null) {
            $object->setGrantType($data->{'grant_type'});
        }
        elseif (property_exists($data, 'grant_type') && $data->{'grant_type'} === null) {
            $object->setGrantType(null);
        }
        if (property_exists($data, 'client_id') && $data->{'client_id'} !== null) {
            $object->setClientId($data->{'client_id'});
        }
        elseif (property_exists($data, 'client_id') && $data->{'client_id'} === null) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'client_secret') && $data->{'client_secret'} !== null) {
            $object->setClientSecret($data->{'client_secret'});
        }
        elseif (property_exists($data, 'client_secret') && $data->{'client_secret'} === null) {
            $object->setClientSecret(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getGrantType()) {
            $data->{'grant_type'} = $object->getGrantType();
        }
        else {
            $data->{'grant_type'} = null;
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        else {
            $data->{'client_id'} = null;
        }
        if (null !== $object->getClientSecret()) {
            $data->{'client_secret'} = $object->getClientSecret();
        }
        else {
            $data->{'client_secret'} = null;
        }
        return $data;
    }
}
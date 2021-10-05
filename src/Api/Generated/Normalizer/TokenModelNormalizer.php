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
class TokenModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\TokenModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\TokenModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\TokenModel();
        if (property_exists($data, 'access_token') && $data->{'access_token'} !== null) {
            $object->setAccessToken($data->{'access_token'});
        }
        elseif (property_exists($data, 'access_token') && $data->{'access_token'} === null) {
            $object->setAccessToken(null);
        }
        if (property_exists($data, 'scope') && $data->{'scope'} !== null) {
            $object->setScope($data->{'scope'});
        }
        elseif (property_exists($data, 'scope') && $data->{'scope'} === null) {
            $object->setScope(null);
        }
        if (property_exists($data, 'expires_in') && $data->{'expires_in'} !== null) {
            $object->setExpiresIn($data->{'expires_in'});
        }
        elseif (property_exists($data, 'expires_in') && $data->{'expires_in'} === null) {
            $object->setExpiresIn(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        return $data;
    }
}
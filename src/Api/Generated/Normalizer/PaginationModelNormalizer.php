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
class PaginationModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\PaginationModel';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\PaginationModel';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Starweb\Api\Generated\Model\PaginationModel();
        if (property_exists($data, 'current_page') && $data->{'current_page'} !== null) {
            $object->setCurrentPage($data->{'current_page'});
        }
        elseif (property_exists($data, 'current_page') && $data->{'current_page'} === null) {
            $object->setCurrentPage(null);
        }
        if (property_exists($data, 'per_page') && $data->{'per_page'} !== null) {
            $object->setPerPage($data->{'per_page'});
        }
        elseif (property_exists($data, 'per_page') && $data->{'per_page'} === null) {
            $object->setPerPage(null);
        }
        if (property_exists($data, 'total') && $data->{'total'} !== null) {
            $object->setTotal($data->{'total'});
        }
        elseif (property_exists($data, 'total') && $data->{'total'} === null) {
            $object->setTotal(null);
        }
        if (property_exists($data, 'count') && $data->{'count'} !== null) {
            $object->setCount($data->{'count'});
        }
        elseif (property_exists($data, 'count') && $data->{'count'} === null) {
            $object->setCount(null);
        }
        if (property_exists($data, 'total_pages') && $data->{'total_pages'} !== null) {
            $object->setTotalPages($data->{'total_pages'});
        }
        elseif (property_exists($data, 'total_pages') && $data->{'total_pages'} === null) {
            $object->setTotalPages(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        return $data;
    }
}
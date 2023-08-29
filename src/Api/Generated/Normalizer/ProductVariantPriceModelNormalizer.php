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
class ProductVariantPriceModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel';
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
        $object = new \Starweb\Api\Generated\Model\ProductVariantPriceModel();
        if (\array_key_exists('priceExVat', $data) && \is_int($data['priceExVat'])) {
            $data['priceExVat'] = (double) $data['priceExVat'];
        }
        if (\array_key_exists('specialPriceExVat', $data) && \is_int($data['specialPriceExVat'])) {
            $data['specialPriceExVat'] = (double) $data['specialPriceExVat'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pricelistId', $data)) {
            $object->setPricelistId($data['pricelistId']);
            unset($data['pricelistId']);
        }
        if (\array_key_exists('priceExVat', $data)) {
            $object->setPriceExVat($data['priceExVat']);
            unset($data['priceExVat']);
        }
        if (\array_key_exists('specialPriceExVat', $data) && $data['specialPriceExVat'] !== null) {
            $object->setSpecialPriceExVat($data['specialPriceExVat']);
            unset($data['specialPriceExVat']);
        }
        elseif (\array_key_exists('specialPriceExVat', $data) && $data['specialPriceExVat'] === null) {
            $object->setSpecialPriceExVat(null);
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
        $data['pricelistId'] = $object->getPricelistId();
        if ($object->isInitialized('priceExVat') && null !== $object->getPriceExVat()) {
            $data['priceExVat'] = $object->getPriceExVat();
        }
        if ($object->isInitialized('specialPriceExVat') && null !== $object->getSpecialPriceExVat()) {
            $data['specialPriceExVat'] = $object->getSpecialPriceExVat();
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
        return array('Starweb\\Api\\Generated\\Model\\ProductVariantPriceModel' => false);
    }
}